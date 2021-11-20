<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OnasNaKl extends Model
{
    use HasFactory;
  
    protected $table = 'onas_nash_kliy';
    protected $fillable = ['name','img'];
}
