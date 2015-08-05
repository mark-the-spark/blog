<?php

namespace App\Repositories;

use App\Tag;

class TagRepository implements TagRepositoryInterface {

	public function show($name)
	{
		return Tag::where('name', $name)->firstOrFail();
	}

	public function tags_with_articles()
	{
		return Tag::has('articles')->get();
	}
}