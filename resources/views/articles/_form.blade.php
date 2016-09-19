<div class="form-group @if($errors->has('title')) {{ 'has-error' }} @endif">
	{!! Form::label('title', null, ['class' => 'control-label']) !!}
	{!! Form::text('title', null, ['class' => 'form-control']) !!}

	@if($errors->has('title'))
	<p class="text-danger">{{ $errors->first('title') }}</p>
	@endif
</div>
<div class="form-group @if($errors->has('body')) {{ 'has-error' }} @endif">
	{!! Form::label('body', null, ['class' => 'control-label']) !!}
	{!! Form::textarea('body', null, ['class' => 'form-control']) !!}

	@if($errors->has('body'))
	<p class="text-danger">{{ $errors->first('body') }}</p>
	@endif
</div>
<div class="form-group @if($errors->has('published_at')) {{ 'has-error' }} @endif">
	{!! Form::label('published_at', 'Pulish On', ['class' => 'control-label']) !!}
	{!! Form::input('date', 'published_at', $article->published_at, ['class' => 'form-control']) !!}

	@if($errors->has('published_at'))
	<p class="text-danger">{{ $errors->first('published_at') }}</p>
	@endif
</div>
<div class="form-group @if($errors->has('tag_list')) {{ 'has-error' }} @endif">
	{!! Form::label('tag_list', "Tags", ['class' => 'control-label']) !!}
	{!! Form::select('tag_list[]', $tags, null, ['class' => 'form-control', 'multiple']) !!}
	{{-- $article->getTagList() can also be used for selected values --}}

	@if($errors->has('tag_list'))
	<p class="text-danger">{{ $errors->first('tag_list') }}</p>
	@endif
</div>

<div class="form-group" style="margin-bottom: 60px">
	{!! Form::submit($submitBtnName, ['class' => 'btn btn-primary']) !!}
</div>