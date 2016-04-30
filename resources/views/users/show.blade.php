@extends('base.main')
@section('title', 'Ver Persona')
@section('users', 'active')

@section('content')

  <div id="page-wrapper">
    <div class="row">
      <div class="col-lg-12">
        <h1 class="page-header">Persona</h1>
      </div>
      <!-- /.col-lg-12 -->
    </div>

    <div class="row">
        <div class="col-lg-12">
          <div class="panel panel-default">
            <div class="panel-body">
              <div class="row">
                <div class="col-md-12">
                  <p><strong>Cargo</strong></p>
                  <p>{{ $persona->user->perfil->nombre }}</p>
                  <p><strong>Codigo</strong></p>
                  <p>{{ $persona->codigo }}</p>
                  <p><strong>Oficina</strong></p>
                  <p><a href="{{ URL::to('oficinas/' . $persona->oficina->id) }}">{{ $persona->oficina->nombre }} <i class="fa fa-search"></i></a></p>
                  <p><strong>Cedula</strong></p>
                  <p>{{ $persona->cedula }}</p>
                  <p><strong>Correo</strong></p>
                  <p>{{ $persona->user->email }}</p>
                  <p><strong>Nombres y Apellidos</strong></p>
                  <p>{{ $persona->nombres }} {{ $persona->apellidos }}</p>
                  <p><strong>Teléfono</strong></p>
                  <p>{{ $persona->telefono }}</p>
                  <p><strong>Dirección</strong></p>
                  <p>{{ $persona->direccion }}</p>
                  <p><strong>Fecha de Nacimiento</strong></p>
                  <p>{{ $persona->fecha_nacimiento }}</p>
                  <a href="{{ URL::to('users/' . $persona->id . '/edit') }}" class="btn btn-info"><i class="fa fa-pencil"></i> Editar</a>
                </div>
              </div>
              <!-- /.row (nested) -->
            </div>
            <!-- /.panel-body -->
          </div>
          <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
      </div>
      <!-- /.row -->

  </div>
  <!-- /#page-wrapper -->

@stop