<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Otzivi extends Model
{
    use HasFactory;

	protected $table = 'otzivi';
    protected $fillable = ['name', 'img', 'text'];

}
