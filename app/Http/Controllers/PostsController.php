<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Post;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PostsController extends Controller
{

	

	public function __construct() {
		$this->middleware('auth');
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index(Request $request)
	{
		if($request->has('search_input')){
			$search = $request->search_input;
			$posts = Post::searchBar($search);
		} else{

			$posts = Post::with('user')->orderBy('created_at', 'desc')->paginate(10);
			$data = array('posts' => $posts);
		}




		return view('posts.index')->with('posts', $posts);
		
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{

		return view('posts.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request)
	{

	
		$post = new Post();
		$post->created_by = Auth::user()->id;

		return $this->validateAndSave($post, $request);
	
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id)
	{
		$post = Post::find($id);
		$data = array('post' => $post);
		$post->vote_score = $post->voteScore();
		return view('posts.show', $data);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id)
	{
		$post = Post::find($id);

	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, $id)
	{
		$post = Post::find($id);
		return $this->validateAndSave($post, $request);
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id)
	{
		$post = Post::find($id);
		$post->delete();
		session()->flash('successMessage', 'Your post was deleted successfully!');

		return redirect()->action('PostsController@index');
	}

	private function validateAndSave (Post $post, Request $request)
	{
		$request->session()->flash('warningMessage', 'Your post was NOT saved successfully');
		$this->validate($request, Post::$rules);
		$request->session()->forget('warningMessage');
		$post->title = $request->input('title');
		$post->url = $request->input('url');
		$post->content = $request->input('content');
		Log::info($request->all());
		Auth::user()->id;
		$post->save();

		$request->session()->flash('successMessage', 'Your post was saved successfully!');
		$value = $request->session('successMessage');
		
		return redirect()->action('PostsController@index');
	}

	public function addVote(Request $request){

		$vote = Vote::with('post')->firstOrCreate([
            'post_id' => $post_id,
            'user_id' => Auth::user()->id
        ]);

        $vote->vote = $post_vote;
        $vote->save();

        $post = $vote->post;
        $post->vote_score = $post->voteScore();
        $post->save();
        return redirect()->action('PostsController@show', ['post_id' => $post_id]);


	}


	

}
