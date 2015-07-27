@extends('_layouts.master')

@section('content')

<h1>{{ $tag->name }}</h1>

@foreach ($tag->articles as $article) 
	<a href="{{ url($article->id) }}"><h3>{{ $article->title }}</h3></a>
	<p>{{ $article->body }}</p>

@endforeach

@stop
