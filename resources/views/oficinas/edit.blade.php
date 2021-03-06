@extends('base.main')
@section('title', 'Editar Oficina')
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

                  {!! Form::model($oficina, array('route' => array('oficinas.update', $oficina->id), 'method' => 'PUT')) !!}
                    <div class="form-group">
                      {!! Form::label('nombre', 'Nombre') !!}
                      {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
                    </div>
                    <div class="form-group">
                      {!! Form::label('telefono', 'Teléfono') !!}
                      {!! Form::text('telefono', null, ['class' => 'form-control']) !!}
                    </div>
                    <div class="form-group">
                      {!! Form::label('direccion', 'Dirección') !!}
                      {!! Form::textarea('direccion', null, ['class' => 'form-control']) !!}
                    </div>
                    <button type="submit" class="btn btn-success">Guardar</button>

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