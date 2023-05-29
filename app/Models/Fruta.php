<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fruta extends Model
{
    public $timestamps = false;
    protected $table = 'frutas';
    protected $fileable =['nombre','precio','cantidad'];

    use HasFactory;
}
