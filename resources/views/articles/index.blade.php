@extends('_layouts.master')

@section('content')
<h2>Articles</h2>

@foreach ($articles as $article)

<a href="{{ url($article->id) }}"><h3>{{ $article->title }}</h3></a>
<p>{{ $article->body }}</p>

@endforeach

{!! $articles->render() !!}

@stop