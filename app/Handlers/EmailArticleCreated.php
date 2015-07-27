<?php

namespace App\Handlers;

use App\Events\ArticleWasCreated;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\BlogMailer;

class EmailArticleCreated
{
    
    public $mailer;

    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct(BlogMailer $mailer)
    {
        $this->mailer = $mailer;
    }

    /**
     * Handle the event.
     *
     * @param  ArticleCreated  $event
     * @return void
     */
    public function handle(ArticleWasCreated $event)
    {
        $article = $event->article;
        
        $this->mailer->ArticleCreated($article);

    }
}
