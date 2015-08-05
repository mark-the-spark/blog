<?php

namespace App\Repositories;

interface TagRepositoryInterface {

	public function show($name);

	public function tags_with_articles();
}