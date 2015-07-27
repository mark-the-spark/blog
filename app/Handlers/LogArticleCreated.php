<?php

namespace App\Handlers;

use App\Events\ArticleWasCreated;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Log;

class LogArticleCreated
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  ArticleCreated  $event
     * @return void
     */
    public function handle(ArticleWasCreated $event)
    {
        Log::info('Article created: '. $event->article->id);
    }
}
