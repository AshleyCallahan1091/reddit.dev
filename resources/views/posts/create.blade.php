@extends('layouts.master')

@section('content')
	@if (session()->has('warningMessage'))
		<div class="alert alert-warning">
			<strong>Warning!</strong> {{ session('warningMessage') }}
		</div>
	
	@endif
	
	<form style="margin-left: 5%; margin-top: 5%;" method="POST" action="{{ action('PostsController@store') }}">
		
		{!! csrf_field() !!}
		<div class="form-group">
			<label>Title: <input type="text" name="title" class="form-control" value="{{ old('title') }}"></label>
		</div>

		<div class="form-group">
			<label>Content: <input type="text" name="content" rows="5" cols="40" class="form-control" value="{{ old('content') }}"></label>
		</div>

		<div class="form-group">
			<label>URL: <input type="text" name="url" class="form-control" value="{{ old('url') }}"></label>
		</div>

		<input type="submit" class="btn btn-default">

	</form>
	</div>

@stop


