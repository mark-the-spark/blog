<?php

namespace App\Http\Composers;

use Illuminate\Contracts\View\View;

class ArticleFormComposer {

	public function compose(View $view)
	{
	    $tags = \App\Tag::lists('name', 'id')->toArray();
	    
	    $view->with('tags', $tags);  
	}

}