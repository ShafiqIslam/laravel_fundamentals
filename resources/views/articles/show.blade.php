@extends('layouts.master')

@section('content')
	<h2>{{ $article->title }}</h2>
	<hr>
	<div class="body">
		{{ $article->body }}
	</div>
	<hr>
	@unless($article->tags->isEmpty())
		<h3><u>Tags:</u></h3>
		<ul>
			@foreach($article->tags as $tag)
				<li>
					<a href="{{ url( strtolower($tag->name) . '/articles') }}">
						{{ $tag->name }}
					</a>
				</li>
			@endforeach
		</ul>
		<hr>
	@endunless
	<a class="btn btn-primary" href="{{ url('article/' . $article->id . '/edit') }}">Edit</a>
@stop