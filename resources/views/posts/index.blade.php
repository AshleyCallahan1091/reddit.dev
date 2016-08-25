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
					<td><span class="glyphicon glyphicon-arrow-up"></p></span><p>
						

					</p>
					<p><span class="glyphicon glyphicon-arrow-down"></span></p></td>
					<td>{{ $post->title }}</td>
					<td>{{ $post->url }}</td>
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
