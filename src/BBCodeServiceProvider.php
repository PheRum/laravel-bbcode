<?php

namespace PheRum\BBCode;

use Illuminate\Support\ServiceProvider;

class BBCodeServiceProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('laravel-bbcode', function () {
            return new BBCodeParser;
        });
    }
}
