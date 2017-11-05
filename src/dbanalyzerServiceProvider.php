<?php

namespace afiqhamzah\dbanalyzer;

use Illuminate\Support\ServiceProvider;

class dbanalyzerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        include __DIR__.'/web.php';
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
       $this->app->make('afiqhamzah\dbanalyzer\DatabaseController');
    }
}
