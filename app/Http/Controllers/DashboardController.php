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
use Carbon\Carbon;


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

    public function descargas()
    {
        $today = Carbon::now();
        $hoy = $today->toDateString();
        $rutas = Auto_ruta::where('created_at', 'like', $hoy.'%')->get();

        return view('descargas.index')
            ->with('rutas', $rutas);
    }

    public function totalUsuarios()
    {
        $personas = Persona::orderBy('cedula','ASC')->get();
        $fecha = Carbon::now();

        $pdf = \PDF::loadView('descargas.totalUsuarios', ['personas' => $personas, 'fecha' => $fecha]);
        return $pdf->stream('Total_Usuarios_'.$fecha->toDateString().'.pfd');
    }

    public function totalAutobuses()
    {
        $buses = Auto::orderBy('matricula','ASC')->get();
        $fecha = Carbon::now();

        $pdf = \PDF::loadView('descargas.totalAutobuses', ['buses' => $buses, 'fecha' => $fecha]);
        return $pdf->stream('Total_Autobuses_'.$fecha->toDateString().'.pfd');
    }

    public function rutasHoy()
    {
        $today = Carbon::now();
        $hoy = $today->toDateString();
        $rutas = Auto_ruta::where('created_at', 'like', $hoy.'%')->get();
        //$rutas = Auto_ruta::orderBy('created_at','ASC')->get();
        $fecha = Carbon::now();


        $pdf = \PDF::loadView('descargas.rutasHoy', ['rutas' => $rutas, 'fecha' => $fecha]);
        return $pdf->stream('Total_Rutas_Hoy_'.$fecha->toDateString().'.pfd');
    }
}
