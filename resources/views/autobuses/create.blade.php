@extends('base.main')
@section('title', 'Registrar Autobus')
@section('autobuses', 'active')
@section('autobuses-reg', 'active')

@section('content')

  <div id="page-wrapper">
    <div class="row">
      <div class="col-lg-12">
        <h1 class="page-header">Autobus</h1>
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
                  {!! Form::open(['route' => 'autobuses.store', 'method' =>'POST']) !!}
                    <div class="form-group col-md-6">
                      {!! Form::label('dueno', 'Seleccione el Dueño') !!}
                      <select name="dueno" id="dueño">
                        <option class="disabled" value="0">- Seleccionar -</option>
                        @foreach($personas as $persona)
                        <option value="{{ $persona->id }}">{{ $persona->nombres }} {{ $persona->apellidos }} - {{ $persona->cedula }}</option>
                        @endforeach
                      </select>
                    </div>
                    <div class="form-group col-md-6">
                      {!! Form::label('responsable', 'Seleccione el Responsable') !!}
                      <select name="responsable" id="dueño">
                        <option class="disabled" value="0">- Seleccionar -</option>
                        @foreach($personas as $persona)
                        <option value="{{ $persona->id }}">{{ $persona->nombres }} {{ $persona->apellidos }} - {{ $persona->cedula }}</option>
                        @endforeach
                      </select>
                    </div>
                    <div class="clearfix"></div>
                    <hr>
                    <div class="form-group col-md-6">
                      {!! Form::label('numero', 'Ingrese Número') !!}
                      {!! Form::number('numero', null, ['class' => 'form-control input-sm']) !!}
                    </div>
                    <div class="form-group col-md-6">
                      {!! Form::label('marca', 'Ingrese Marca') !!}
                      {!! Form::text('marca', null, ['class' => 'form-control input-sm']) !!}
                    </div>
                    <div class="form-group col-md-6">
                      {!! Form::label('modelo', 'Ingrese Modelo') !!}
                      {!! Form::text('modelo', null, ['class' => 'form-control input-sm']) !!}
                    </div>
                    <div class="form-group col-md-6">
                      {!! Form::label('serial', 'Ingrese Serial') !!}
                      {!! Form::text('serial', null, ['class' => 'form-control input-sm']) !!}
                    </div>
                    <div class="form-group col-md-6">
                      {!! Form::label('matricula', 'Ingrese Matricula') !!}
                      {!! Form::text('matricula', null, ['class' => 'form-control input-sm']) !!}
                    </div>
                    <div class="clearfix"></div>
                    <button type="submit" class="btn btn-success">Guardar</button>
                    <button type="reset" class="btn btn-danger">Limpiar</button>
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