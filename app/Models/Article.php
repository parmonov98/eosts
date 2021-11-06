<?php

namespace App\Models;

use Spatie\Feed\Feedable;
use Spatie\Feed\FeedItem;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{

	protected $table = 'article';
    protected $fillable = [
        'title','img', 'textru','texten','texttu', 'descriptionru', 'descriptionen', 'descriptiontu', 'user_id', 'view_count','category_id','comment','heddin','pwp','izox','slider','created_at'
    ];

    protected $casts = [
        'title' => 'array',
        'img' => 'array'
    ];


	 public function user()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }

	public function menu(){
		return $this->belongsTo(Menu::class,'category_id','id');
	}

    public function test(){
        return $this->hasMany(Testing::class);
    }


    public function loyxa(){
        return $this->hasMany(Loyxas::class,'article_id','id');
    }


    public function comments(){
        return $this->hasMany(Comment::class);
    }


    public function scopePublished($query)
    {
        return $query->where('published', true);
    }

    public function scopeUnpublished($query)
    {
        //return $query->where('published', false);
    }




}
