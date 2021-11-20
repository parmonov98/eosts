<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Settings extends Model
{
    //
	protected $table = 'setting';
    protected $fillable = ['names','address','sot_network','img','rating','css','prcomp','question','vebor', 'select','cachistva','osobiy','competent'];
 
    protected $casts = [
        'names' => 'array',
        'address' => 'array',
        'sot_network' => 'array','prcomp' => 'array','cachistva' => 'array','osobiy' => 'array','competent' => 'array',
        'question' => 'array','select' => 'array','vebor' => 'array'
    ];
   
    public function user() {
		return $this->belongsTo(User::class);
	}
}
