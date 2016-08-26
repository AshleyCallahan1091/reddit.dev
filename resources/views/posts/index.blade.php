@extends ('layouts.master')

@section('content')


	@if (session()->has('successMessage'))
    	<div class="alert alert-success">{{ session('successMessage') }}</div>
	@endif

	@if (session()->has('warningMessage'))
    	<div class="alert alert-warning">{{ session('warningMessage') }}</div>
	@endif



	<h1 class="text-center">No Longer in the 90's Table!</h1>
   <div class="container">
		<table class="table">
			<thead>
				<tr>
					<th><a href="#">Vote</a></th>
					<th>Title</th>
					<th>URL</th>
					<th>Content</th>
					<th><a href="#">Time</a></th>
					<th>Author</th>
				</tr>
			</thead>
			@foreach ($posts as $post)

				<tr>
					<td>
						<div class="text-center">
							<a method="POST" action="{{ action('PostsController@addVote', ['vote_value' => 1, 'post_id' => $post->id]) }}">
							<span class="glyphicon glyphicon-arrow-up"></span></a>
						</div>
						<div class="text-center">
							{{ $post->vote_score }} 
						</div>
						<div class="text-center">
							<a method="POST" action="{{ action('PostsController@addVote', ['vote_value' => 0, 'post_id' => $post->id]) }}">
							<span class="glyphicon glyphicon-arrow-down"></span>
							</a>
						</div>
					</td>

					<td>
						<a method="GET" href="{{ action('PostsController@show', ['post_id' => $post->id]) }}">{{ $post->title }}</a>
					</td>
					<td>
						<a method="GET" href="{{ $post->url }}">{{ $post->url }}</a>
					</td>
					<td>{{ $post->content }}</td>
					<td> {{ $post->created_at->setTimezone('America/Chicago')->format('l, F jS Y @ h:i:s A') }}</td>
					<td>{{ $post->user->name}}</td>
				</tr>

			@endforeach



		</table>
	</div>

	<div class="text-center">
		{!! $posts->render() !!}
	</div>	
	@stop
