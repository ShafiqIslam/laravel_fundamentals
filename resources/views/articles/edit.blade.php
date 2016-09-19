@extends('layouts.master')

@section('content')
	<h2>Edit: {{ $article->title }}</h2>
	<hr>

	{!! Form::model($article, ['method' => 'put', 'url' => 'article/' . $article->id]) !!}
		@include('articles._form', ['submitBtnName' => "Update Article"])
	{!! Form::close() !!}
@stop