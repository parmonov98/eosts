<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $table = 'ourteam';
    protected $fillable = ['prof','name', 'img'];
    
    protected $casts = ['prof' => 'array','name' => 'array'];

}
