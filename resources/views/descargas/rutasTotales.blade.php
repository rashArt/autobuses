<!DOCTYPE html>
<html>
<head>
  <title>Listado de Rutas</title>
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
        <th>Dueño</th>
        <th>Responsable</th>
        <th>Ruta</th>
      </tr>
    </thead>
    @foreach($rutas as $ruta)
      <tbody>
        <tr>
          <td>{{$ruta->auto->matricula}}</td>
          <td>
            @foreach($ruta->auto->personaDuenos as $dueno)
              {{ $dueno->nombres }} {{ $dueno->apellidos }} - {{ $dueno->cedula }}
            @endforeach
          </td>
          <td>
            @foreach($ruta->auto->personaResponsables as $rep)
              {{ $rep->nombres }} {{ $rep->apellidos }} - {{ $rep->cedula }}
            @endforeach
          </td>
          <td>
            {{ $ruta->ruta->nombre }}
          </td>
        </tr>
      </tbody>
    @endforeach
  </table>
</body>
</html>