<?php

namespace unniks\laragraphlib;

use Illuminate\Support\ServiceProvider;

class LaragraphlibServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        include __DIR__.'/routes.php';
        $this->app->make('unniks\laragraphlib\LaragraphlibController');
    }
}
