<?php

namespace Alexisgeneau\MailValidate;

use Illuminate\Support\ServiceProvider;

class MailValidateServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */

    protected $defer = false;
    
    public function boot()
    {
        // Get namespace
        $nameSpace = $this->app->getNamespace();

        //Include Root
        include __DIR__.'/routes.php';
 
        // Move files
        $this->publishes([
            __DIR__.'/mailvalidate/resources/views' => base_path('resources/views'),
            __DIR__.'/mailvalidate/database/migrations' => base_path('database/migrations'),
            __DIR__.'/mailvalidate/app/Http/Controllers/Auth' => base_path('app/Http/Controllers/Auth'),
            __DIR__.'/mailvalidate/app/Http/Controllers' => base_path('app/Http/Controllers'),
        ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
