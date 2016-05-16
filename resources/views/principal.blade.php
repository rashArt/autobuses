@extends('base.main')
@section('title', 'Principal')
@section('principal', 'active')

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
          @if (Auth::user()->admin())
          <div class="col-lg-3 col-md-6">
            <div class="panel panel-primary">
              <div class="panel-heading">
                <div class="row">
                  <div class="col-xs-3">
                    <i class="fa fa-users fa-5x"></i>
                  </div>
                  <div class="col-xs-9 text-right">
                    <div class="huge">{{ $personas }}</div>
                    <div>Usuarios</div>
                  </div>
                </div>
              </div>
              <a href="{{ route('users.index') }}">
                <div class="panel-footer">
                  <span class="pull-left">Ver detalles</span>
                  <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                  <div class="clearfix"></div>
                </div>
              </a>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="panel panel-green">
              <div class="panel-heading">
                <div class="row">
                  <div class="col-xs-3">
                    <i class="fa fa-building fa-5x"></i>
                  </div>
                  <div class="col-xs-9 text-right">
                    <div class="huge">{{ $oficinas }}</div>
                    <div>Oficinas</div>
                  </div>
                </div>
              </div>
              <a href="{{ route('oficinas.index') }}">
                <div class="panel-footer">
                  <span class="pull-left">Ver detalles</span>
                  <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                  <div class="clearfix"></div>
                </div>
              </a>
            </div>
          </div>
          @endif
          <div class="col-lg-3 col-md-6">
            <div class="panel panel-yellow">
              <div class="panel-heading">
                <div class="row">
                  <div class="col-xs-3">
                    <i class="fa fa-bus fa-5x"></i>
                  </div>
                  <div class="col-xs-9 text-right">
                    <div class="huge">{{ $autobuses }}</div>
                    <div>Autobuses</div>
                  </div>
                </div>
              </div>
              <a href="{{ route('autobuses.index') }}">
                <div class="panel-footer">
                  <span class="pull-left">Ver detalles</span>
                  <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                  <div class="clearfix"></div>
                </div>
              </a>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="panel panel-red">
              <div class="panel-heading">
                <div class="row">
                  <div class="col-xs-3">
                    <i class="fa fa-road fa-5x"></i>
                  </div>
                  <div class="col-xs-9 text-right">
                    <div class="huge">{{ $asignadas }}</div>
                    <div>Rutas Asigandas hoy</div>
                  </div>
                </div>
              </div>
              <a href="{{ route('asignaciones.index') }}">
                <div class="panel-footer">
                  <span class="pull-left">Ver detalles</span>
                  <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                  <div class="clearfix"></div>
                </div>
              </a>
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