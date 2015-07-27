<?php 

namespace App\Repositories;
use App\Article;
use Carbon\Carbon;
use App\Pagination\ArticlePaginator;

class ArticleRepository implements ArticleRepositoryInterface {

	public function getLatest()
	{
		$latest_articles = Article::latest()->paginate(5);

		return $latest_articles;
	}


	public function find($id)
	{
		$article = Article::find($id);
		return $article;
	}

	public function destroy($id)
	{
		return Article::destroy($id);
	}

	public function groupByDate() 
	{
		return Article::all()->groupBy(function($date){
			return Carbon::parse($date->created_at)->format('Y-m');
		});


	}
}