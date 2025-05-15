<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
    //esto agregamos, no creamos los otros porq ya estan por default
    protected $fillable=["titulo", "descripcion"];
}
