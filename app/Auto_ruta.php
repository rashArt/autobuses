<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Auto_ruta extends Model
{
    protected $table = 'auto_ruta';

    protected $fillable = ['auto_id', 'ruta_id'];

    /* Relaciones */

    public function auto(){

        return $this->belongsTo(Auto::class);
    }

    public function ruta(){

        return $this->belongsTo(Ruta::class);
    }
}
