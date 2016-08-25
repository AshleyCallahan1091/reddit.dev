@extends('layouts.master')

<div class="container">

	<section>

		<div class="row">

			<h1 class="header-title">Login</h1>

			<div class="col-md-6 col-md-offset-3" id="login">
				<form method="POST" action="{{ action('Auth\AuthController@postLogin') }}" data-validation data-required-message="This field is required">

					{{ csrf_field() }}
					<div class="form-group">
					    <input type="text" class="form-control" id="email" name="email" placeholder="Email" data-required>
					</div>
					<div class="form-group">
					    <input type="password" class="form-control" id="password" name="password" placeholder="Password" data-required>
					</div>
					<div class="row">
						<div class="col-sm-6">
							<button type="submit" class="btn btn-primary">Login</button>
						</div>
						<div class="col-sm-6 text-right">
							<a href="/signup" class="btn btn-success">Go To Signup</a>
						</div>
					</div>
				</form>

			</div>

		</div>

	</section>

</div>