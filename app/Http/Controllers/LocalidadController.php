<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Localidad;
use Laracasts\Flash\Flash;

class LocalidadController extends Controller
{

    public function index()
    {
        $localidades = Localidad::all();

        return view('localidades.index')
            ->with('localidades', $localidades);
    }

    public function create()
    {
        return view('localidades.create');
    }

    public function store(Request $request)
    {
        $localidad = new Localidad();
        $localidad->nombre = $request->nombre;
        $localidad->save();

        Flash::success('Se ha registrado la Localidad '. $localidad->nombre .' exitosamente!');

        return redirect()->route('localidades.index');
    }


    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $localidad = Localidad::find($id);

        return view('localidades.edit')
            ->with('localidad', $localidad);
    }

    public function update(Request $request, $id)
    {
        $localidades = Localidad::find($id);
        $localidades->nombre = $request->nombre;
        $localidades->save();

        Flash::success('Se ha actualizado la Localidad '. $localidades->nombre .' exitosamente!');

        return redirect()->route('localidades.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
