@extends('base.main')
@section('title', 'Ver Oficina')
@section('oficinas', 'active')

@section('content')

  <div id="page-wrapper">
    <div class="row">
      <div class="col-lg-12">
        <h1 class="page-header">Oficinas</h1>
      </div>
      <!-- /.col-lg-12 -->
    </div>

    <div class="row">
        <div class="col-lg-12">
          <div class="panel panel-default">
            <div class="panel-body">
              <div class="row">
                <div class="col-md-12">
                  <p><strong>Número</strong></p>
                  <p>{{ $oficina->id }}</p>
                  <p><strong>Teléfono</strong></p>
                  <p>{{ $oficina->telefono }}</p>
                  <p><strong>Dirección</strong></p>
                  <p>{{ $oficina->direccion }}</p>
                  <a href="{{ URL::to('oficinas/' . $oficina->id . '/edit') }}" class="btn btn-info"><i class="fa fa-pencil"></i> Editar</a>
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