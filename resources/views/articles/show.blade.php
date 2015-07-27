@extends('_layouts.master')

@section('content')

<a href="{{ route('home') }}"><p>Go back to articles</p></a>
<h2> {{ $article->title }} </h2>
<p>Article by: {{ $article->user->name }}</p>
@foreach ($article->tags as $tag)
	<a href="{{ route('tag.show', $tag->name) }}"><span class="label label-info">{{ $tag->name }}</span></a>
@endforeach
<p>{{ $article->body }} </p>


@if (Auth::check())
	@include('_partials/article_actions')
@endif



@stop