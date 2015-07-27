@extends('_layouts.master')

@section('content')

<h2>Edit Article</h2>

{!! Form::model($article, ['method' => 'PATCH', 'action' => ['ArticlesController@update', $article->id ]]) !!}

@include('_partials.forms.article-form')

{!! Form::close() !!}

@stop