<?php

namespace App\Http\Composers;

use Illuminate\Contracts\View\View;

class TagSidebarComposer {

	public function compose(View $view)
	{
	    $tags = \App\Tag::has('articles')->get();

	    $view->with('tags', $tags);  
	}

}