<?php

use App\Post;

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::resource('posts', 'PostsController');
Route::resource('vote-sort', 'PostsController');


// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');


Route::resource('users', 'UsersController');

Route::get('posts/{post}', 'PostsController@show');

Route::post('vote-post/{post}', 'PostsController@addVote');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');


Route::get('/', function () {
    return view('welcome');
});

// Route::get('/uppercase/{angryString}', 'HomeController@uppercase');

// Route::get('/increment/{number}', 'HomeController@increment');

// Route::get('/add/{numberOne}/{numberTwo}', function($numberOne, $numberTwo)
// {
//     return $numberOne + $numberTwo;
// });

// Route::get('/sayhello/{name}', function($name)
// {
//     if ($name == "Chris") {
//         return Redirect::to('/');
//     }
//  	$data = array('name' => $name);
//     return view('my-first-view', $data);
// });


// Route::get('/rolldice/{guess}', 'HomeController@rollDice');

// Route::get('orm-test', function ()
// {
//    $post1 = new Post();
// 	$post1->title = 'Eloquent is awesome!';
// 	$post1->url='https://laravel.com/docs/5.1/eloquent';
// 	$post1->content  = 'It is super easy to create a new post.';
// 	$post1->created_by = 1;
// 	$post1->save();

// 	$post2 = new Post();
// 	$post2->title = 'Eloquent is really easy!';
// 	$post2->url='https://laravel.com/docs/5.1/eloquent';
// 	$post2->content = 'It is super easy to create a new post.';
// 	$post2->created_by = 2;
// 	$post2->save();
// });












