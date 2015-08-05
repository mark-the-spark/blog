<?php

namespace App\Http\Composers;

use Illuminate\Contracts\View\View;
use App\Repositories\TagRepositoryInterface;

class TagSidebarComposer {

	public $tags; 

	public function __construct(TagRepositoryInterface $tags)
	{
		$this->tags = $tags;
	}

	public function compose(View $view)
	{
	    
		$tag_list = $this->tags->tags_with_articles();

	    $view->with('tags', $tag_list);  
	}

}