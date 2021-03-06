<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Microsites related Language Lines
    |--------------------------------------------------------------------------
    */

    'page_title' => 'Долбоор микросайттар',
    'page_title_with_name' => 'Долбоор микросайт :project',
    
    'pages' => [
        'create' => 'Түзүү ":project"',
        'edit' => 'өзгөртүү ":project"',
    ],
    
    
    'hints' => [
        'what' => 'Сиздин долбоор тууралуу маалымат бет түзүүгө мүмкүнчүлүк берет',
        'create_for_project' => 'Микросайт түзүү',
        'for_project' => 'Микросайт түзүү',
        'delete_microsite' => 'Микросайт өчүрүү',
        'edit_microsite' => 'Микросайт беттин тууралоорун жана мазмунду өзгөртүү',
        
        'site_title' => 'Вебсайттын аты, колдонуучуларга көрсөтүлөт',
        'slug' => 'Бул версиянын URL колдонуучууларга жеңил-беттеги дарегин эстеп табууга жардам берет. Дареги "түзүү" сөзү менен башталышы мүмкүн эмес.',
        'logo' => 'Логотиптин эң жогорку уруксат берилген өлчөмү 280x80 пиксел. Сүрөт коопсуз HTTP кошулма аркылуу жеткиликтүү болушу керек',
        'default_language' => 'Бир пайдалануучу тарабынан көрсөтүлгөн эмес болсо, тили, баракча бул тилде көрсөтүлөт',

        'content' => 'Бул жерде сиз каалаган болсо, бет жана тексти мазмунду орното аласыз, багыттоо менюсу. Азыркы учурда, мазмуну орус жана англис тилдеринде тарабынан колдоого алынат.',
        
        'page_title' => 'башкы бетине жөнөтөт
.',
        'page_slug' => 'Бул URL версиясы колдонуучуларга багытталган жана ал жеңил бир сайттан дарегин эстеп табууга жардам берет.',
        'page_content' => 'Бул жерде сиз текстти, шилтемелерди, жана башка текст түрлөрү киргизүү мүмкүн. Колдоого формат калыптоо тилинде сөз. Ошондой эле шилтемелерди киргизүүгө жана башка сайттарындагы ден тиркей аласыз. Мисалы, тиешелүү линия @rss кодду киргизүү, RSS мазмунду кат жөнөтүүгө мүмкүн: HTTPS: //klinktest.wordpress.com/feed/. Сураныч, мазмун ресурстарын интенсивдүү пайдалануу качууга кештелген болот деп белгилишет. Кештөө аралыгы 1-4 саатка чейин созулат(тейлөө боюнча көз каранды)',
    ],
    
    'actions' => [
        'create' => 'Түзүү',
        'edit' => 'Өзгөртүү', 
        'save' => 'Сактоо',
        'delete' => 'Өчүрүү',
        'delete_ask' => 'Сиз микросайт өчүрүү алдында турасыз ":title". Эгер мындан ары да улантууну каалайсызбы?',
        'view_site' => 'Көрүү',
        'publish' => 'Түзүү',
        'view_project_documents' => 'Долбоордун бөлүмгө өтүү',
        'search' => 'K-Link издөө...',
        'search_project' => ':project издөө...',
    ],
    
    'messages' => [
        'created' => '":title" Ал жаратылган жана бар <a href=":site_url" target="_blank">:slug</a>',
        'updated' => '":title" маалымат ыртылды',
        'deleted' => '":title" ал алынып салынды. Дарек микросайт мындан ары жеткиликтУУ болбой калат',
    ],
    
    'errors' => [
        'create' => 'Түзүүдө көйгөй чыкты. :error',
        'create_no_project' => 'Сураныч, мазмунду аныктоо. Долбоордун жок болгон учурда, микросайт түзүү мүмкүн эмес.',
        'create_already_exists' => 'Долбоору үчүн микросайт ":project" бар. Ар бир долбоор боюнча бирден ашык микросайт түзүү мүмкүн эмес.',
        'delete' => 'ката жок кылуу учурунда ката кетти. :error',
        'update' => 'Маалыматтарды өзгөртүү учурунда ката кетти. :error',
        'delete_forbidden' => 'Сиз ":title" жок кыла албайсыз, сиз долбоордун админисратор эмес экенин байланышта.',
        'forbidden' => 'Бир микросайт менен өз ара үчүн, долбоордун администратор укуктарга ээ болуш керек.',
    ],
    
    'labels' => [
        'microsite' => 'Микросайт',
        'site_title' => 'Аты',
        'slug' => 'Достук дареги',
        'site_description' => 'Сүрөттөлүшү',
        'logo' => 'Вебсайттын логотипи. Сураныч, сүрөттүн URL жазыңыз',
        'default_language' => 'Демейки тил',
        'cancel_and_back' => 'Жокко чыгаруу',
        'publishing_box' => 'Сайт мазмуну',
        'content' => 'Мазмуну',
        
        'content_en' => 'Анлис версиясы',
        'content_ru' => 'Орус версиясы',
        
        'page_title' => 'Баракчы атын түзүү',
        'page_slug' => 'Адрес',
        'page_content' => 'Мазмуну',
    ],
];
