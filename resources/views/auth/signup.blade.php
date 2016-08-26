@extends('layouts.master')


@section('content')
<div class="container">

	<section>

		<div class="row">

			<h1 class="header-title">Signup</h1>

			<div class="col-md-6 col-md-offset-3" id="login">
				<form method="POST" action="{{ action('Auth\AuthController@postRegister') }}" data-validation data-required-message="This field is required">

					{{ csrf_field() }}
					<div class="form-group">
					    <input type="text" class="form-control" id="email" name="email" placeholder="Email" data-required>
					</div>
					<div class="form-group">
					    <input type="password" class="form-control" id="password" name="password" placeholder="Password" data-required>
					</div>
					<div class="row">
						<div class="col-sm-6">
							<button type="submit" class="btn btn-primary">Sign Up!</button>
						</div>
						<div class="col-sm-6 text-right">
							<a href="/auth/login" class="btn btn-success">Go To Login</a>
						</div>
					</div>
				</form>

			</div>

		</div>

	</section>

</div>
@stop