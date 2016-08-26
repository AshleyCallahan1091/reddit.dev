@extends('layouts.master')
@section('content')
   
   <div class="col-sm-12 text-center">
		<div class="row">

		
			<a method="POST" action="{{ action('PostsController@addVote', ['vote_value' => 1, 'post_id' => $post->id]) }}">
			<span class="glyphicon glyphicon-arrow-up"></span></a>
		
		</div>
		<div class="row">
			<p>{{ $post->vote_score }}</p>
		</div>
		<div class="row">
			
			<a method="POST" action="{{ action('PostsController@addVote', ['vote_value' => 0, 'post_id' => $post->id]) }}">
			<span class="glyphicon glyphicon-arrow-down"></span>
			</a>
		
		</div>
	</div>


	<dl>
		<dt>Title</dt>
		<dd> {{ $post->title}}</dd>
		<dt>URL</dt>
		<dd>{{ $post->url}}</dd>
		<dt>Content</dt>
		<dd>{{ $post->content}}</dd>
	</dl>

@stop




