<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Requ extends Model
{
    use HasFactory;
  
protected $table = 'requ';
protected $fillable = ['name', 'phone','incoterms', 'city_of_departure', 'weight', 'email', 'dimension', 'package', 'message','prev'];
}
