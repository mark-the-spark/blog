<?php

namespace App\Http\Composers;

use Illuminate\Contracts\View\View;

class SidebarComposer {


	public function compose(View $view)
	{
		$view->with('latest_articles', \App\Article::latest()->take(10)->get());
	}

}