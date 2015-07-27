<?php

namespace App\Repositories;

interface ArticleRepositoryInterface {

	public function getLatest();

	public function find($id);

	public function destroy($id);
}