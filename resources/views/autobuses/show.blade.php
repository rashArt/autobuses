@extends('base.main')
@section('title', 'Ver Autobus')
@section('autobuses', 'active')

@section('content')

  <div id="page-wrapper">
    <div class="row">
      <div class="col-lg-12">
        <h1 class="page-header">Autobuses</h1>
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
                  <p>{{ $bus->id }}</p>
                  <p><strong>Marca</strong></p>
                  <p>{{ $bus->marca }}</p>
                  <p><strong>Serial</strong></p>
                  <p>{{ $bus->serial }}</p>
                  <p><strong>Matricula</strong></p>
                  <p>{{ $bus->marticula }}</p>
                  <p><strong>Dueño</strong></p>
                  <p>
                    @foreach($bus->personaDuenos as $dueno)
                      <a href="{{ URL::to('users/' . $dueno->id ) }}">
                        {{ $dueno->nombres }} {{ $dueno->apellidos }} - C.I.: {{ $dueno->cedula }} <i class="fa fa-search"></i>
                      </a>
                    @endforeach
                  </p>
                  <p><strong>Responsable</strong></p>
                  <p>
                    @foreach($bus->personaResponsables as $rep)
                      <a href="{{ URL::to('users/' . $dueno->id ) }}">
                        {{ $rep->nombres }} {{ $rep->apellidos }} - C.I.: {{ $rep->cedula }} <i class="fa fa-search"></i>
                      </a>
                    @endforeach
                  </p>
                  <a href="{{ URL::to('oficinas/' . $bus->id . '/edit') }}" class="btn btn-info"><i class="fa fa-pencil"></i> Editar</a>
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