@extends('base.main')
@section('title', 'Listado de Autobuses')
@section('autobuses', 'active')
@section('autobuses-list', 'active')

@section('css')
  <!-- DataTables CSS -->
  <link href="{{ asset('css/plugins/dataTables.bootstrap.css') }}" rel="stylesheet">
@stop

@section('content')

    <div id="page-wrapper">
      <div class="row">
        <div class="col-lg-12">
          <h1 class="page-header">Autobuses</h1>
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
              @if(count($bus) > 0)
                <div class="table-responsive">
                  <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Matricula</th>
                        <th>Dueño</th>
                        <th>Responsable</th>
                        <th>Acciones</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($bus as $bus)
                        <tr class="">
                          <td>{{ $bus->numero }}</td>
                          <td>{{ $bus->matricula }}</td>
                          <td>
                            @foreach($bus->personaDuenos as $dueno)
                              {{ $dueno->nombres }} {{ $dueno->apellidos }} - {{ $dueno->cedula }}
                            @endforeach
                          </td>
                          <td>
                            @foreach($bus->personaResponsables as $rep)
                              {{ $rep->nombres }} {{ $rep->apellidos }} - {{ $rep->cedula }}
                            @endforeach
                          </td>
                          <td>
                            <div class="" role="">

                              <a href="{{ URL::to('autobuses/' . $bus->id . '/edit') }}" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Editar</a>

                              <a href="{{ URL::to('autobuses/' . $bus->id) }}" class="btn btn-success btn-xs"><i class="fa fa-eye"></i> Ver</a>

                              <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#del{!!$bus->id!!}"><i class="fa fa-trash"></i> Eliminar</button>
                              <!-- Modal -->
                              <div class="modal fade" id="del{!!$bus->id!!}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
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
                                        <a href="autobuses/{{$bus->id}}/delete" class="btn btn-danger">Eliminar <i class="icon-trash"></i></a>
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