<?php

namespace MieProject\Settings;

use Illuminate\Support\ServiceProvider;

class SettingsServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        require_once __DIR__ . '/helpers.php';

        $this->publishes([
            __DIR__.'\config\setting_fields.php' => config_path('setting_fields.php'),
        ]);
        $this->mergeConfigFrom(
            __DIR__.'\config\setting_fields.php' , 'setting_fields'
        );

        $this->loadViewsFrom(__DIR__.'/views', 'MIEsetting');

        $this->loadRoutesFrom(__DIR__."/routes/web.php");
        $this->loadMigrationsFrom(__DIR__.'/migrations');

    }
}
