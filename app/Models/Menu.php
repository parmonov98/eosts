<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
	protected $table = 'menus';
	protected $fillable = ['title','parent','path'];

	protected $casts = [
        'title' => 'array'
    ];
    
	public function articles(){
		return $this->hasMany(Article::class,'category_id','id');
	}


    public function delete(array $options = []) {
    	self::where('parent',$this->id)->delete();
		return parent::delete($options);
	}

}
