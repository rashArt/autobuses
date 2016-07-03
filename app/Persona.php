<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    protected $table = 'personas';

    protected $fillable = [
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

    public function autoDuenos(){

      return $this->belongsTo("App\Auto","auto_dueno")->withTimestamps()->withPivot('auto_id');
    }

    public function autoResponsables(){

      return $this->belongsTo("App\Auto","auto_responsable")->withTimestamps()->withPivot('auto_id');
    }


}
