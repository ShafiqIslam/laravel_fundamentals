@extends('layouts.master')

@section('content')

	<!-- <pre>
	<?php //print_r($errors->toArray()); ?>
	</pre> -->

	<h2>Create New Article</h2>
	<hr>

	{!! Form::model( $article = new \App\Models\Article, ['url' => 'article']) !!}
		@include('articles._form', ['submitBtnName' => "Create Article"])
	{!! Form::close() !!}
@stop