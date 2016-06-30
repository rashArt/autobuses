<!DOCTYPE html>
<html>
<head>
  <title>Listado de rutas al día</title>
  <link rel="stylesheet" type="text/css" href="css/custom-pdf.css">
</head>
<body>

  <div class="header">
    <h1>UNION DE CONDUCTORES 87007 A.C.</h1>
    <h2>RIF.: J-06000904-9</h2>
    <h4>Listado de Rutas al {{ $fecha->format('d-m-Y') }}</h4>
    <img src="img/logo-simple.png" alt="logo">
  </div>

  <table>
    <thead>
      <tr>
        <th>Matricula</th>
        <th>Ruta</th>
        <th>Fecha</th>
      </tr>
    </thead>
    @foreach($rutas as $ruta)
      <tbody>
        <tr>
          <td>{{$ruta->auto->matricula}}</td>
          <td>{{$ruta->ruta->nombre }}</td>
          <td>{{$ruta->created_at }}</td>
        </tr>
      </tbody>
    @endforeach
  </table>
</body>
</html>