<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Maps extends Model
{
    use HasFactory;
  
    protected $table = 'maps';
    protected $fillable = ['title','longitu','latitu'];
    protected $casts = ['title' => 'array'];
}
