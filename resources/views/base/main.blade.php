<!DOCTYPE html>
<html lang="es">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Autobuses | @yield('title')</title>

  <!-- Bootstrap Core CSS -->
  <link href="{{ asset('css/superhero.css') }}" rel="stylesheet">

  <!-- Bootstrap Custom CSS -->
  <link href="{{ asset('css/custom.css') }}" rel="stylesheet">

  <!-- MetisMenu CSS -->
  <link href="{{ asset('css/plugins/metisMenu/metisMenu.min.css') }}" rel="stylesheet">

  <!-- Custom CSS -->
  <link href="{{ asset('css/sb-admin-2.css') }}" rel="stylesheet">

  <!-- Custom Fonts -->
  <link href="{{ asset('font-awesome-4.5.0/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">

  @yield('css')

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->

</head>

<body>

  <div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-static-top" role="navigation" style="margin-bottom: 0">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="{{ route('principal') }}">Autobuses</a>
      </div>
      <!-- /.navbar-header -->

      <ul class="nav navbar-top-links navbar-right">
        <!-- /.dropdown -->
        <li class="dropdown">
          <a class="dropdown-toggle drop-custom" data-toggle="dropdown" href="#">
            <i class="fa fa-user fa-fw"></i> {{ Auth::user()->perfil->nombre }} <i class="fa fa-caret-down"></i>
          </a>
          <ul class="dropdown-menu dropdown-user">
            <li><a href="#"><i class="fa fa-user fa-fw"></i> {{ Auth::user()->email }} </a></li>
            <li class="divider"></li>
            <li><a href="{{ route('logout') }}"><i class="fa fa-sign-out fa-fw"></i> salir</a>
            </li>
          </ul>
          <!-- /.dropdown-user -->
        </li>
        <!-- /.dropdown -->
      </ul>
      <!-- /.navbar-top-links -->

      <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse">
          <ul class="nav" id="side-menu">
            <li class="sidebar-search">
              <div class="input-group custom-search-form">
                <input type="text" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                  <button class="btn btn-default" type="button">
                    <i class="fa fa-search"></i>
                  </button>
                </span>
              </div>
              <!-- /input-group -->
            </li>
            <li>
              <a href="{{ route('principal') }}" class="@yield('principal')"><i class="fa fa-dashboard fa-fw"></i> Principal</a>
            </li>
            <li class="@yield('autobuses')">
              <a href="#"><i class="fa fa-bus fa-fw"></i> Autobuses<span class="fa arrow"></span></a>
              <ul class="nav nav-second-level">
                <li>
                  <a href="{{ route('autobuses.create') }}" class="@yield('autobuses-reg')">Registrar</a>
                </li>
                <li>
                  <a href="{{ route('autobuses.index') }}" class="@yield('autobuses-list')">Listado</a>
                </li>
              </ul>
              <!-- /.nav-second-level -->
            </li>
            <li class="@yield('oficinas')">
              <a href="#"><i class="fa fa-building fa-fw"></i> Oficinas<span class="fa arrow"></span></a>
              <ul class="nav nav-second-level">
                <li>
                  <a href="{{ route('oficinas.create') }}" class="@yield('oficinas-reg')">Registrar</a>
                </li>
                <li>
                  <a href="{{ route('oficinas.index') }}" class="@yield('oficinas-list')">Listado</a>
                </li>
              </ul>
              <!-- /.nav-second-level -->
            </li>
            <li class="@yield('perfiles')">
              <a href="#"><i class="fa fa-tag fa-fw"></i> Perfiles<span class="fa arrow"></span></a>
              <ul class="nav nav-second-level">
                <li>
                  <a href="{{ route('perfiles.create') }}" class="@yield('perfiles-reg')">Registrar</a>
                </li>
                <li>
                  <a href="{{ route('perfiles.index') }}" class="@yield('perfiles-list')">Listado</a>
                </li>
              </ul>
              <!-- /.nav-second-level -->
            </li>
            <li class="@yield('users')">
              <a href="#"><i class="fa fa-users fa-fw"></i> Usuarios<span class="fa arrow"></span></a>
              <ul class="nav nav-second-level">
                <li>
                  <a href="{{ route('users.create') }}" class="@yield('users-reg')">Registrar</a>
                </li>
                <li>
                  <a href="{{ route('users.index') }}" class="@yield('users-list')">Listado</a>
                </li>
              </ul>
              <!-- /.nav-second-level -->
            </li>
            <li>
              <a href="#" class="@yield('descargas')"><i class="fa fa-download fa-fw"></i> Descargas</a>
            </li>
          </ul>
        </div>
        <!-- /.sidebar-collapse -->
      </div>
      <!-- /.navbar-static-side -->
    </nav>

    @yield('content')

  </div>
  <!-- /#wrapper -->

  <!-- jQuery -->
  <script src="{{ asset('js/jquery.js') }}"></script>

  <!-- Bootstrap Core JavaScript -->
  <script src="{{ asset('js/bootstrap.min.js') }}"></script>

  <!-- Metis Menu Plugin JavaScript -->
  <script src="{{ asset('js/plugins/metisMenu/metisMenu.min.js') }}"></script>

  <!-- Custom Theme JavaScript -->
  <script src="{{ asset('js/sb-admin-2.js') }}"></script>

  @yield('js')

</body>

</html>
