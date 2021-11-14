<?php

namespace App\Models;

use Spatie\Feed\Feedable;
use Spatie\Feed\FeedItem;
use Illuminate\Database\Eloquent\Model;

class Uslug extends Model
{

	protected $table = 'uslugi';
    protected $fillable = ['title', 'desc','text','img'];

    protected $casts = ['title' => 'array','desc' => 'array','text' => 'array','img' => 'array'];


	 public function user()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }

	public function menu(){
		return $this->belongsTo(Menu::class,'category_id','id');
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
