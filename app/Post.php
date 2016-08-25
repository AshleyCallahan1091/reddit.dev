<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{

     protected $table = 'posts';

     public static $rules =
		
		[  
			'title' => 'required|max:100',
			'url' => 'required',
			'content' => 'required'
		];

	public function user()
	{
	    return $this->belongsTo('App\User', 'created_by');
	}

	public static function searchBar($search){
		return Post::where('title', 'LIKE', '%' . $search . '%')->orWhere('content', 'LIKE', '%' . $search . '%')->paginate(10);
	}

	public function show (Request $request, $id){
		$post = Post::with('user')->findOrfail($id);
		
	}

	// public static function count(){
	// 	return ;
	// }

	public function votes(){
		return $this->hasMany(Vote::class);
	}

	public function upvotes (){
		return $this->votes()->where('vote', '=', 1);
	}

	public function downvotes (){
		$this->votes()->where('vote', '=', 0);
	}

	public function voteScore (){
		$upvotes = $this->upvotes()->count();
		$downvotes = $this->votes()->count();
		return $upvotes - $downvotes;
	}

	public function userVote(User $user){
		$this->votes()->where('user_id', '=', $user->id)->first();
	}


	
}

