<?php

namespace App\Http\Composers;

use Illuminate\Contracts\View\View;
use App\Repositories\ArticleRepositoryInterface;

class DateSidebarComposer {

	protected $article;

	public function __construct(ArticleRepositoryInterface $article) 
	{
		$this->article = $article;
	}

	public function compose(View $view)
	{
		$view->with('article_groups', $this->article->groupByDate());
	}


}