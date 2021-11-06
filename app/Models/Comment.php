<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //
	protected $table = 'comments';
    protected $fillable = ['name','text','site','user_id','article_id','parent_id','email','heddin','prev'];
   
        
  
    public function articles() {
		return $this->belongsTo(Article::class);
	}
	
	public function user() {
		return $this->belongsTo(User::class);
	}
}
