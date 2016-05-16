@extends('base.main')
@section('title', 'Registrar Rutas')
@section('rutas', 'active')
@section('rutas-reg', 'active')

@section('content')

  <div id="page-wrapper">
    <div class="row">
      <div class="col-lg-12">
        <h1 class="page-header">Rutas</h1>
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
                  {!! Form::open(['route' => 'rutas.store', 'method' =>'POST']) !!}
                    {{--<div class="form-group">
                      {!! Form::label('auto_id', 'Seleccione un autobus') !!}
                      <select name="auto_id" class="form-control">
                        @foreach($autobuses as $bus)
                          <option value="{{$bus->id}}">{{ $bus->numero }} - {{ $bus->matricula }}</option>+
                        @endforeach
                      </select>
                    </div>--}}
                    <div class="form-group">
                      {!! Form::label('inicio_id', 'Seleccione Oficina') !!}
                      <select name="inicio_id" class="form-control">
                        @foreach($localidades as $localidad)
                          <option value="{{$localidad->nombre}}">{{$localidad->nombre}}</option>
                        @endforeach
                      </select>
                    </div>
                    <div class="form-group">
                      {!! Form::label('fin_id', 'Seleccione Oficina') !!}
                      <select name="fin_id" class="form-control">
                        @foreach($localidades as $localidad)
                          <option value="{{$localidad->nombre}}">{{$localidad->nombre}}</option>
                        @endforeach
                      </select>
                    </div>
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