@extends('base.main')
@section('title', 'Editar Asignacion de ruta')
@section('asignaciones', 'active')

@section('content')

  <div id="page-wrapper">
    <div class="row">
      <div class="col-lg-12">
        <h1 class="page-header">Asignaciones</h1>
      </div>
      <!-- /.col-lg-12 -->
    </div>

    <div class="row">
        <div class="col-lg-12">
          <div class="panel panel-default">
            <div class="panel-body">
              <div class="row">
                <div class="col-lg-6">
                  @if(count($errors) > 0)
                    <div class="alert alert-danger alert-dismissible" role="alert">
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
                      <ul>
                        @foreach($errors->all() as $error)
                          <li>{!! $error !!}</li>
                        @endforeach
                      </ul>
                    </div>
                  @endif
                  {!! Form::model($ruta, array('route' => array('asignaciones.update', $ruta->id), 'method' => 'PUT')) !!}
                    <div class="form-group col-md-6">
                      {!! Form::label('auto_actual', 'Autobus Seleccionado') !!}
                      <h5>{{ $ruta->auto->numero }} - {{ $ruta->auto->matricula }}</h5>
                    </div>
                    <div class="formg-roup col-md-6">
                      {!! Form::label('ruta_actual', 'Ruta Seleccionada') !!}
                      <h5>{{ $ruta->ruta->nombre }}</h5>
                    </div>
                    <div class="clearfix"></div>
                    <div class="form-group col-md-6">
                      {!! Form::label('ruta_id', 'Seleccione una ruta') !!}
                      {!! Form::select('ruta_id', $rutas ,null, ['class' => 'form-control']) !!}
                    </div>
                    <div class="col-md-12">
                      <button type="submit" class="btn btn-success">Guardar</button>
                      <button type="reset" class="btn btn-danger">Limpiar</button>
                    </div>
                  {!! Form::close() !!}
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


@section('js')
  <script type="text/javascript">
  $(document).ready(function() {
    $("select").select2();
  });
  </script>
@stop