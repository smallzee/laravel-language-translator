<?php

namespace Smallzee\Translator;

class TranslatorServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/translator.php', 'translator');

        $this->app->singleton('translator', function () {
            return new Translator();
        });
    }

    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/translator.php' => config_path('translator.php'),
        ], 'config');
    }
}