<?php

namespace OneOffTech\Licenses\Providers;

use Illuminate\Support\ServiceProvider;
use OneOffTech\Licenses\Services\LicenseService;
use OneOffTech\Licenses\Contracts\LicenseRepository;

/**
 * Register the service related to License selection and presentation
 */
class LicensesProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../../config/licenses.php' => config_path('licenses.php')
        ], 'config');

        // Translation loading and publishing

        $this->loadTranslationsFrom(__DIR__.'/../../lang', 'license');

        $this->publishes([
            __DIR__.'/../../lang' => resource_path('lang/vendor/license'),
        ], 'lang');

        // Views loading and publishing

        $this->loadViewsFrom(__DIR__.'/../../views', 'license');

        $this->publishes([
            __DIR__.'/../../views' => resource_path('views/vendor/license'),
        ], 'views');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/../../config/licenses.php',
            'licenses'
        );

        $this->app->bind(LicenseRepository::class, LicenseService::class);

        $this->app->singleton(LicenseService::class, function ($app) {
            return new LicenseService(config('licenses'));
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [LicenseService::class, LicenseRepository::class];
    }
}
