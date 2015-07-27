<h1>Testiny my email</h1>

<p>Hi Mark</p>

<p>User {{ $article->user->name }} has created an article with the following details</p>

<ul>
	<li>Title: {{$article->title}}</li>
	<li>Body: {{$article->body}}</li>
</ul>
<p>To view this article <a href="{{route('article.show', $article->id) }}">click here</a></p>
