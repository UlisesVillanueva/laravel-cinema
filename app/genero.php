<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class genero extends Model
{
	protected $primaryKey ='idgenero';
    protected $table="generos";
    protected $fillable=['idgenero','genero'];
}
