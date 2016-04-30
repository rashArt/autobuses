<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\PerfilCreateRequest;
use App\Http\Requests\PerfilUpdateRequest;
use App\Http\Controllers\Controller;
use App\Perfil;
use Laracasts\Flash\Flash;

class PerfilController extends Controller
{
    public function index()
    {
        $perfiles = Perfil::all();

        return view('perfiles.index')
            ->with('perfiles', $perfiles);
    }

    public function create()
    {
        return view('perfiles.create');
    }

    public function store(PerfilCreateRequest $request)
    {
        $perfil = new Perfil();
        $perfil->nombre = $request->nombre;
        $perfil->save();

        Flash::success('Se ha registrado el Perfil '. $perfil->nombre .' exitosamente!');

        return redirect()->route('perfiles.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $perfil = Perfil::find($id);

        if ($perfil->nombre == 'Administrador') {

            Flash::success('El perfil Administrador no puede ser Modificado!');

            return redirect()->route('perfiles.index');
        }else{

            return view('perfiles.edit')
            ->with('perfil', $perfil);
        }
    }

    public function update(PerfilUpdateRequest $request, $id)
    {
        $perfil = Perfil::find($id);

        if ($perfil->nombre == 'Administrador') {

            Flash::success('El perfil Administrador no puede ser Modificado!');

            return redirect()->route('perfiles.index');
        }else{

            $perfil->nombre = $request->nombre;
            $perfil->save();

            Flash::success('Se ha actualizado el Perfil '. $perfil->nombre .' exitosamente!');

            return redirect()->route('perfiles.index');
        }
    }

    public function delete($id)
    {
        $perfil = Perfil::find($id);

        if ($perfil->nombre == 'Administrador') {

            Flash::success('El perfil Administrador no puede ser Eliminado!');

            return redirect()->route('perfiles.index');
        }else{

            $perfil->delete();

            Flash::success('Se ha eliminado exitosamente!');

            return back();
        }
    }
}
