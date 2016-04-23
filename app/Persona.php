<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    protected $table = 'personas';

    protected $fillable = [
        'codigo',
        'cedula',
        'nombres',
        'apellidos',
        'telefono',
        'direccion',
        'fecha_nacimiento',
        'oficina_id',
        'user_id'
    ];

    /* Relaciones */

    public function user(){

        return $this->belongsTo(User::class);
    }

    public function oficina(){

        return $this->belongsTo(Oficina::class);
    }


    public function autoDueno(){

        return $this->hasMany(Auto_dueno::class);
    }

    public function autoResponsable(){

        return $this->hasMany(Auto_responsable::class);
    }

}
