<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Biblioteca UNERG</title>

  <!-- Bootstrap Core CSS -->
  <link href="{{ asset('css/flatly.css') }}" rel="stylesheet">

  <!-- MetisMenu CSS -->
  <link href="{{ asset('css/plugins/metisMenu/metisMenu.min.css') }}" rel="stylesheet">

  <!-- Custom CSS -->
  <link href="{{ asset('css/sb-admin-2.css') }}" rel="stylesheet">

  <!-- Custom Fonts -->
  <link href="{{ asset('font-awesome-4.1.0/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->

</head>

<body>

  <div class="container">
    <div class="row">
      <div class="col-md-4 col-md-offset-4">
        <div class="login-panel panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title">Biblioteca Central UNERG</h3>
          </div>
          <div class="panel-body">
            @include('flash::message')

            @if (count($errors) > 0)
              <div class="alert alert-danger alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
                  <ul>
                    @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                    @endforeach
                  </ul>
              </div>
            @endif

            {!! Form::open(['route' => 'login', 'method' => 'POST']) !!}
              <fieldset>
                <div class="form-group">
                  <label for="">Correo</label>
                  {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Correo Electronico', 'autofocus']) !!}
                </div>
                <div class="form-group">
                  <label for="">Contraseña</label>
                  {!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'Contraseña']) !!}
                </div>
                <input type="submit" class="btn btn-lg btn-success btn-block" value="Entrar">
              </fieldset>
            {!! Form::close() !!}
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- jQuery -->
  <script src="{{ asset('js/jquery.js') }}"></script>

  <!-- Bootstrap Core JavaScript -->
  <script src="{{ asset('js/bootstrap.min.js') }}"></script>

  <!-- Metis Menu Plugin JavaScript -->
  <script src="{{ asset('js/plugins/metisMenu/metisMenu.min.js') }}"></script>

  <!-- Custom Theme JavaScript -->
  <script src="{{ asset('js/sb-admin-2.js') }}"></script>

</body>

</html>
