@extends('_layouts.master')

@section('content')

<h2>Create a new article</h2>

{!! Form::open(['route' => 'article.store'])  !!}

@include('_partials.forms.article-form')


{!! Form::close() !!}
@stop