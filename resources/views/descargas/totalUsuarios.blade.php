<!DOCTYPE html>
<html>
<head>
  <title>Listado de Usuarios</title>
  <link rel="stylesheet" type="text/css" href="css/custom-pdf.css">
</head>
<body>

  <div class="header">
    <h1>UNION DE CONDUCTORES 87007 A.C.</h1>
    <h2>RIF.: J-06000904-9</h2>
    <h4>Listado de Usuarios al {{ $fecha->format('d-m-Y') }}</h4>
    <img src="img/logo-simple.png" alt="logo">
  </div>

  <table>
    <thead>
      <tr>
        <th>Cedula</th>
        <th>Nombre y Apellido</th>
        <th>Correo</th>
        <th>Creado</th>
      </tr>
    </thead>
    @foreach($personas as $persona)
      <tbody>
        <tr>
          <td>{{$persona->cedula}}</td>
          <td>{{$persona->nombres}} {{$persona->apellidos}}</td>
          <td>{{$persona->user->email}}</td>
          <td>{{$persona->user->created_at}}</td>
        </tr>
      </tbody>
    @endforeach
  </table>
</body>
</html>