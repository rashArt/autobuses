<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Auto_dueno extends Model
{
    protected $table = 'auto_dueno';

    protected $fillable = ['autobus_id', 'persona_id'];


    /* Relaciones */

    public function persona(){

        return $this->belongsTo(Persona::class);
    }

    public function auto(){

        return $this->belongsTo(Auto::class);
    }
}
