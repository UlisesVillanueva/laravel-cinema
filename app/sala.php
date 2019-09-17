<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sala extends Model
{
    protected $primaryKey ='idsala';
    protected $table="salas";
    protected $fillable=['idsala','sala'];
}
