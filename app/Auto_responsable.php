<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Auto_responsable extends Model
{
    protected $table = 'auto_responsable';

    protected $fillable = ['auto_id', 'persona_id'];

}
