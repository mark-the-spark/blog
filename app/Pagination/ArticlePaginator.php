<?php 

namespace App\Pagination;

use Illuminate\Pagination\LengthAwarePaginator;

class ArticlePaginator {


	public function paginate ($items, $total, $perPage, $currentPage)
	{
		return new LengthAwarePaginator($items, $total, $perPage, $currentPage);
	}

}
