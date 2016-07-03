@extends('base.main')
@section('title', 'Listado de Rutas')
@section('rutas', 'active')
@section('rutas-list', 'active')

@section('css')
  <!-- DataTables CSS -->
  <link href="{{ asset('css/plugins/dataTables.bootstrap.css') }}" rel="stylesheet">
@stop

@section('content')

    <div id="page-wrapper">
      <div class="row">
        <div class="col-lg-12">
          <h1 class="page-header">Rutas</h1>
        </div>
        <!-- /.col-lg-12 -->
      </div>
      <!-- /.row -->
      <div class="row">
        <div class="col-lg-12">
          @include('flash::message')
          <div class="panel panel-default">
            <!-- /.panel-heading -->
            <div class="panel-body">
              @if(count($rutas) > 0)
                <div class="table-responsive">
                  <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                      <tr>
                        <th>Ruta</th>
                        <th>Estado</th>
                        <th>Acciones</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($rutas as $ruta)
                        <tr class="">
                          <td>{{ $ruta->nombre }}</td>
                          <td>
                            @if($ruta->status == 1)
                              <span class="label label-success">Activa</span>
                            @else
                              <span class="label label-danger">Inactiva</span>
                            @endif
                          </td>
                           <td>
                            <div class="" role="">

                              <button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#del{!!$ruta->id!!}"><i class="fa fa-refresh"></i> Cambiar</button>
                              <div class="modal fade" id="del{!!$ruta->id!!}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                <div class="modal-dialog" role="document">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                      <h4 class="modal-title" id="myModalLabel">Desea Cambiar?</h4>
                                    </div>
                                    <div class="modal-body">
                                      Está seguro de cambiar el estado de la ruta?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-success pull-left" data-dismiss="modal">Cancelar</button>
                                        @if($ruta->status == 1)
                  {!! Form::model($ruta, array('route' => array('rutas.update', $ruta->id), 'method' => 'PUT')) !!}
                    <input name="status" type="hidden" value="0">
                    <button type="submit" class="btn btn-primary">Cambiar</button>
                  {!! Form::close() !!}
                                        @else
                  {!! Form::model($ruta, array('route' => array('rutas.update', $ruta->id), 'method' => 'PUT')) !!}
                    <input name="status" type="hidden" value="1">
                    <button type="submit" class="btn btn-primary">Cambiar</button>
                  {!! Form::close() !!}
                                        @endif
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </td>
                        </tr>
                      @endforeach()
                    </tbody>
                  </table>
                </div>
                <!-- /.table-responsive -->
              @else
                <h3>No hay registros</h3>
              @endif
            </div>
            <!-- /.panel-body -->
          </div>
          <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
      </div>

    </div>
    <!-- /#page-wrapper -->

@stop

@section('js')
  <!-- DataTables JavaScript -->
  <script src="{{ asset('js/plugins/dataTables/jquery.dataTables.js') }}"></script>
  <script src="{{ asset('js/plugins/dataTables/dataTables.bootstrap.js') }}"></script>
  <script>
    $(document).ready(function() {
      $('#dataTables-example').dataTable();
    });
  </script>
@stop