<?php

namespace App;

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