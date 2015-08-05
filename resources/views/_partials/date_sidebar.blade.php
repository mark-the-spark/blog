<p>
	@foreach ($articles_by_date as $date => $articles)	
		{{ \Carbon\Carbon::createFromFormat('Y-m', $date)->format('F Y') }}
		<ul>
			@foreach ($articles as $article)
				<li>{{ $article->title }}</li>
			@endforeach
		 
		</ul>
	@endforeach
</p>