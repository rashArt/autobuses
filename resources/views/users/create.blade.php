@extends('base.main')
@section('title', 'Registrar Persona')
@section('users', 'active')
@section('users-reg', 'active')

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
                  {!! Form::open(['route' => 'users.store', 'method' =>'POST']) !!}
                    <div class="form-group col-md-6">
                      {!! Form::label('codigo', 'Ingrese Codigo') !!}
                      {!! Form::text('codigo', null, ['class' => 'form-control']) !!}
                    </div>
                    <div class="form-group col-md-6">
                      {!! Form::label('perfil_id', 'Seleccione Perfil') !!}
                      {!! Form::select('perfil_id', $perfiles, null, ['class' => 'form-control']) !!}
                    </div>
                    <div class="form-group col-md-6">
                      {!! Form::label('oficina_id', 'Seleccione Oficina') !!}
                      {!! Form::select('oficina_id', $oficinas, null, ['class' => 'form-control']) !!}
                    </div>
                    <div class="clearfix"></div>
                    <hr>
                    <div class="form-group col-md-6">
                      {!! Form::label('cedula', 'Ingrese Numero de Cedula') !!}
                      {!! Form::text('cedula', null, ['class' => 'form-control']) !!}
                    </div>
                    <div class="form-group col-md-6">
                      {!! Form::label('email', 'Ingrese Correo Electrónico') !!}
                      {!! Form::email('email', null, ['class' => 'form-control']) !!}
                    </div>
                    <div class="form-group col-md-6">
                      {!! Form::label('nombres', 'Nombre') !!}
                      {!! Form::text('nombres', null, ['class' => 'form-control']) !!}
                    </div>
                    <div class="form-group col-md-6">
                      {!! Form::label('apellidos', 'Apellidos') !!}
                      {!! Form::text('apellidos', null, ['class' => 'form-control']) !!}
                    </div>
                    <div class="form-group col-md-6">
                      {!! Form::label('telefono', 'Numero de telefono') !!}
                      {!! Form::text('telefono', null, ['class' => 'form-control']) !!}
                    </div>
                    <div class="form-group col-md-6">
                      {!! Form::label('fecha_nacimiento', 'Fecha de Nacimiento') !!}
                      {!! Form::text('fecha_nacimiento', null, ['class' => 'form-control']) !!}
                    </div>
                    <div class="form-group col-md-6">
                      {!! Form::label('password', 'Ingrese Contraseña') !!}
                      {!! Form::password('password', ['class' => 'form-control']) !!}
                    </div>
                    <div class="form-group col-md-6">
                      {!! Form::label('password_confirmation', 'Confirme Contraseña') !!}
                      {!! Form::password('password_confirmation', ['class' => 'form-control']) !!}
                    </div>
                    <div class="form-group col-md-12">
                      {!! Form::label('direccion', 'Dirección') !!}
                      {!! Form::textarea('direccion', null, ['class' => 'form-control']) !!}
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