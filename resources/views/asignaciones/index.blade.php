@extends('base.main')
@section('title', 'Listado de Rutas Asignadas')
@section('asignaciones', 'active')
@section('asignaciones-list', 'active')

@section('css')
  <!-- DataTables CSS -->
  <link href="{{ asset('css/plugins/dataTables.bootstrap.css') }}" rel="stylesheet">
@stop

@section('content')

    <div id="page-wrapper">
      <div class="row">
        <div class="col-lg-12">
          <h1 class="page-header">Rutas Asignadas</h1>
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
                        <th>Autobus</th>
                        <th>Ruta</th>
                        <th>Fecha y Hora</th>
                        <th>Acciones</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($rutas as $ruta)
                        <tr class="">
                          <td>{{ $ruta->auto->numero }} - {{ $ruta->auto->matricula }}</td>
                          <td>{{ $ruta->ruta->nombre }}</td>
                          <td>{{ $ruta->created_at }}</td>
                          <td>
                            <div class="" role="">

                              <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#del{!!$ruta->id!!}"><i class="fa fa-trash"></i> Eliminar</button>
                              <!-- Modal -->
                              <div class="modal fade" id="del{!!$ruta->id!!}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                <div class="modal-dialog" role="document">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                      <h4 class="modal-title" id="myModalLabel">Desea Eliminar?</h4>
                                    </div>
                                    <div class="modal-body">
                                      Se eliminará de forma permanente
                                    </div>
                                    <div class="modal-footer">
                                      <div class="btn-group">
                                        <button type="button" class="btn btn-success" data-dismiss="modal">Cancelar</button>
                                        <a href="asignaciones/{{$ruta->id}}/delete" class="btn btn-danger">Eliminar <i class="icon-trash"></i></a>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div> <!-- / Modal -->
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