<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use App\Oficina;
use App\Persona;
use App\Auto;
use App\Auto_ruta;

class DashboardController extends Controller
{
    public function principal()
    {
        $personas = Persona::count();
        $oficinas = Oficina::count();
        $autobuses = Auto::count();
        $rutas = Auto_ruta::whereDay('created_at', '=', date('d'))->get();
        $asignadas = count($rutas);

        return view('principal')
            ->with('personas', $personas)
            ->with('oficinas', $oficinas)
            ->with('autobuses', $autobuses)
            ->with('asignadas', $asignadas);
    }
}
