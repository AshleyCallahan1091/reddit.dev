<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\User;
use App\Post;

class Vote extends Model {

	public function user() 
	    {
	        return $this->belongsTo(User::class);
	    }

	    public function post() 
	    {
	        return $this->belongsTo(Post::class);
	    }

	    






}