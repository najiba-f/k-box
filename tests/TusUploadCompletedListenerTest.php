<?php

use Tests\BrowserKitTestCase;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Avvertix\TusUpload\Events\TusUploadCompleted;
use Avvertix\TusUpload\TusUpload;
use KlinkDMS\Listeners\TusUploadCompletedHandler;
use Carbon\Carbon;
use KlinkDMS\DocumentDescriptor;
use KlinkDMS\File;

class TusUploadCompletedListenerTest extends BrowserKitTestCase
{
    use DatabaseTransactions;

    public function setUp()
    {
        parent::setUp();

        config([
            'tusupload.storage' => storage_path('')
        ]);
    }

    private function createEvent($user, $requestId = '14b1c4c77771671a8479bc0444bbc5ce')
    {
        $path = storage_path(str_slug($requestId).'.bin');

        file_put_contents($path, 'Test File Content');

        $size = filesize($path);

        $upload = TusUpload::forceCreate([
            'request_id' => $requestId,
            'tus_id' => str_slug($requestId),
            'user_id' => $user->id,
            'filename' => basename($path).'.txt',
            'size' => $size,
            'offset' => $size,
            'mimetype' => 'text/plain',
            'upload_token' => 'AAAAAAAAAAAA',
            'upload_token_expires_at' => Carbon::now()->addHour(),
        ]);

        $upload->completed = true;
        $upload->save();
        
        $file = File::forceCreate([
            'name' => $upload->filename,
            'hash' => hash_file('sha512', $path),
            'mime_type' => $upload->mimetype,
            'size' => $upload->size,
            'thumbnail_path' => null,
            'path' => '',
            'user_id' => $user->id,
            'original_uri' => '',
            'is_folder' => false,
            'request_id' => $requestId
        ]);

        $descr = DocumentDescriptor::forceCreate([
            'institution_id' => $user->institution->id,
            'local_document_id' => substr($file->hash, 0, 6),
            'title' => $file->name,
            'hash' => $file->hash,
            'document_uri' => 'https://something.com',
            'thumbnail_uri' => 'https://something.com',
            'mime_type' => $file->mime_type,
            'visibility' => 'private',
            'document_type' => 'document',
            'user_owner' => $user->name.' <'.$user->email.'>',
            'user_uploader' => $user->name.' <'.$user->email.'>',
            'owner_id' => $user->id,
            'file_id' => $file->id,
            'created_at' => $file->created_at,
            'status' => DocumentDescriptor::STATUS_UPLOADING
        ]);

        return new TusUploadCompleted($upload->fresh());
    }

    public function test_document_descriptor_is_updated_and_indexed()
    {
        $this->withKlinkAdapterFake();

        $user = $this->createAdminUser();

        $request_id = 'REQUEST';

        $completed_event = $this->createEvent($user, $request_id);

        $listener = app(TusUploadCompletedHandler::class);

        $listener->handle($completed_event);

        $file = File::where('request_id', $request_id)->first();

        $this->assertNotNull($file);
        $this->assertNotNull($file->upload_completed_at);
        $this->assertTrue($file->upload_completed);
        $this->assertTrue(file_exists($file->path));
        unlink($file->path);
        $this->assertNotNull($file->document);
        
        $document = $file->document;
        $this->assertEquals(DocumentDescriptor::STATUS_COMPLETED, $document->status);
    }
}