@extends('layouts.master')


@section('content')

<div class="container">
	<div class="row">
		<div class="col-lg-3 col-sm-6">
			<div class="card hovercard">
				<div class="cardheader">
					<img alt="" src="">
				</div>
				<div class="avatar">
					<img alt="" src="">
				</div>
				<div class="info">
					<div class="title">
						<p>{{ $user->name }}</p>
					</div>
					<div class="desc">@if ($logged_in_user->id === $user->id)
						{{ $user->email }}
					@endif
					</div>
					<!-- <div class="desc">Total Karma: {{ }}</div> -->
					<div class="desc">I am addicted to coffee</div>
				</div>
			</div>
		</div>

	</div>
</div>

<div class="container text-left">
	@if ($logged_in_user->id === $user->id)
		<a href="{{ action('UsersController@edit', ['id' => Auth::user()->id] ) }}">Edit Profile</a>
	
	@endif
</div>

<div class="container">
<table class="table">

	<thead>
				<tr>
					<th>Vote</th>
					<th>Title</th>
					<th>URL</th>
					<th>Content</th>
					<th>Time</th>
					<th>Author</th>
				</tr>
			</thead>
	@foreach ($posts as $post)

				<tr>
					<td><a><span class="glyphicon glyphicon-arrow-up"></p></span></a>
					<p>
						<!-- Score --> 	

					</p>
					<p><a><span class="glyphicon glyphicon-arrow-down"></span></a></p></td>
					<td>{{ $post->title }}</td>
					<td>{{ $post->url }}</td>
					<td>{{ $post->content }}</td>
					<td> {{ $post->created_at->setTimezone('America/Chicago')->format('l, F jS Y @ h:i:s A') }}</td>
					<td>{{ $post->user->name}}</td>
				</tr>

			@endforeach
</table>
</div>

@stop