@extends('base.main')
@section('title', 'Asignar Ruta')
@section('asignaciones', 'active')
@section('asignaciones-reg', 'active')

@section('content')

  <div id="page-wrapper">
    <div class="row">
      <div class="col-lg-12">
        <h1 class="page-header">Asignar Rutas</h1>
      </div>
      <!-- /.col-lg-12 -->
    </div>

    <div class="row">
        <div class="col-lg-12">
          @include('flash::message')
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
                  {!! Form::open(['route' => 'asignaciones.store', 'method' =>'POST']) !!}
                    <div class="form-group col-md-6">
                      {!! Form::label('auto_id', 'Seleccione un autobus') !!}
                      <select name="auto_id" class="form-control">
                        @foreach($autobuses as $bus)
                          <option value="{{$bus->id}}">{{ $bus->numero }} - {{ $bus->matricula }}</option>+
                        @endforeach
                      </select>
                    </div>
                    <div class="form-group col-md-6">
                      {!! Form::label('ruta_id', 'Seleccione una ruta') !!}
                      {!! Form::select('ruta_id', $rutas, null, ['class' => 'form-control']) !!}
                    </div>
                    <div class="col-md-12">
                      <button type="submit" class="btn btn-success">Guardar</button>
                      <button type="reset" class="btn btn-danger">Limpiar</button>
                    </div>
                  </form>
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