<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OnasVap extends Model
{
    use HasFactory;
  
    protected $table = 'onas_vapros';
    protected $fillable = ['vopros', 'otvet'];

    protected $casts = ['vopros' => 'array','otvet' => 'array'];
}