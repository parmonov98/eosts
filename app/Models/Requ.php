<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Requ extends Model
{
    use HasFactory;
  
    protected $table = 'requ';
    protected $fillable = ['name', 'number', 'email', 'package', 'text'];
}
