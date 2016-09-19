@extends('layouts.master')

@section('content')
	<h2>Articles @if(isset($tag)) <small> about </small> <code>{{ $tag->name }}</code> @endif</h2>
	<hr>
	@unless($articles->isEmpty())
		@foreach($articles as $article)
			<a href="{{ url('article/' . $article->id) }}">
				<h2>{{ $article->title }}</h2>
			</a>
			<div class="body">
				{{ $article->body }}
			</div>
		@endforeach
	@else
		<h3>No Articles To Show.</h3>
		<hr>
		<a class="btn btn-primary" href="{{ url('article/create') }}">Create One</a>
	@endunless
@stop