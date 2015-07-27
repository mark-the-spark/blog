<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ViewComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        
        //includes
        $this->sidebarComposer();
        $this->tagSidebarComposer();
        $this->dateSidebarComposer();
        //forms
        $this->articleFormComposer();
        
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

    protected function sidebarComposer()
    {
        view()->composer('_partials.sidebar', 'App\Http\Composers\SidebarComposer');
    }


    protected function tagSidebarComposer()
    {
        view()->composer('_partials/tag_sidebar', 'App\Http\Composers\TagSidebarComposer');
    }


    protected function articleFormComposer()
    {
        
        view()->composer('_partials.forms.article-form', 'App\Http\Composers\ArticleFormComposer');
    }

    protected function dateSidebarComposer()
    {
        view()->composer('_partials/date_sidebar', 'App\Http\Composers\DateSidebarComposer');
    }
}
