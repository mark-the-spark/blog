<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        
    }   

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('App\Repositories\ArticleRepositoryInterface', 'App\Repositories\ArticleRepository');
        $this->app->bind('App\Repositories\TagRepositoryInterface', 'App\Repositories\TagRepository');
    }
}
