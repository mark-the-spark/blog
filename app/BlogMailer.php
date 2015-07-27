<?php

namespace App;

use Mail;

class BlogMailer {

	public function __construct() 
	{

	}

	public function ArticleCreated ($article)
	{
		Mail::send(
			'emails.newArticle',
			['article' => $article],
			function ($message) {
	    		$message->from('mark@example.com', 'Mark Hughes');
	    		$message->to('mark.david.hughes@gmail.com');
			}
		);

	}
}