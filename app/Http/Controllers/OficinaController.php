<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\OficinaCreateRequest;
use App\Http\Requests\OficinaUpdateRequest;
use App\Http\Controllers\Controller;
use App\Oficina;
use Laracasts\Flash\Flash;

class OficinaController extends Controller
{

    public function index()
    {
        $oficinas = Oficina::all();

        return view('oficinas.index')
            ->with('oficinas', $oficinas);
    }

    public function create()
    {
        return view('oficinas.create');
    }

    public function store(OficinaCreateRequest $request)
    {
        $oficina = new Oficina();
        $oficina->nombre        = $request->nombre;
        $oficina->telefono      = $request->telefono;
        $oficina->direccion     = $request->direccion;
        $oficina->save();

        Flash::success('Se ha registrado la Oficina '. $oficina->nombre .' exitosamente!');

        return redirect()->route('oficinas.index');
    }

    public function show($id)
    {
        $oficina = Oficina::find($id);

        return view('oficinas.show')
            ->with('oficina', $oficina);
    }


    public function edit($id)
    {
        $oficina = Oficina::find($id);

        return view('oficinas.edit')
            ->with('oficina', $oficina);
    }


    public function update(OficinaUpdateRequest $request, $id)
    {
        $oficina = Oficina::find($id);
        $oficina->nombre        = $request->nombre;
        $oficina->telefono      = $request->telefono;
        $oficina->direccion     = $request->direccion;
        $oficina->save();

        Flash::success('Se ha actualizado la Oficina '. $oficina->nombre .' exitosamente!');

        return redirect()->route('oficinas.index');
    }

    public function delete($id)
    {
        Oficina::find($id)->delete();

        Flash::success('Se ha eliminado exitosamente!');

        return back();
    }
}
