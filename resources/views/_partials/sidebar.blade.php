<h3>Latest Blog Posts</h3>

@foreach ($latest_articles as $article) 
	
	<a href="{{ url($article->id)  }}"><h4> {{ $article->title }} </h4></a>
@endforeach