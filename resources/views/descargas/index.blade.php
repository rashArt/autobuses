@extends('base.main')
@section('title', 'Principal')
@section('principal', 'active')

@section('content')

@section('content')

    <!-- Page Content -->
    <div id="page-wrapper">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <h1 class="page-header">Principal</h1>
          </div>
          <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
          <div class="col-lg-3 col-md-3">
            <div class="panel panel-primary">
              <div class="panel-heading">
                <div class="row">
                  <div class="col-xs-12 text-center">
                    <div class="huge"><i class="fa fa-group fa-2x"></i></div>
                    <div><a class="btn btn-light btn-xs" href="{{ route('descargas/totalUsuarios') }}"><i class="fa fa-download fa-fw"></i>Usuarios</a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-3">
            <div class="panel panel-yellow">
              <div class="panel-heading">
                <div class="row">
                  <div class="col-xs-12 text-center">
                    <div class="huge"><i class="fa fa-bus fa-2x"></i></div>
                    <div><a class="btn btn-light btn-xs" href="{{ route('descargas/totalAutobuses') }}"><i class="fa fa-download fa-fw"></i>Autobuses</a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-3">
            <div class="panel panel-red">
              <div class="panel-heading">
                <div class="row">
                  <div class="col-xs-12 text-center">
                    <div class="huge"><i class="fa fa-road fa-2x"></i></div>
                    <div>
                    @if(count($rutas) != 0)
                      <a class="btn btn-light btn-xs" href="{{ route('descargas/rutasHoy') }}"><i class="fa fa-download fa-fw"></i>Rutas de hoy</a></div>
                    @else
                      <a class="btn btn-light btn-xs disabled" href="{{ route('descargas/rutasHoy') }}"><i class="fa fa-download fa-fw"></i>Rutas de hoy</a></div>
                    @endif
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /.row -->
      </div>
      <!-- /.row -->


      </div>
      <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->
@stop