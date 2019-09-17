<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class paise extends Model
{
	protected $primaryKey ='idpais';
    protected $table="paises";
    protected $fillable=['idpais','nombre'];
}
