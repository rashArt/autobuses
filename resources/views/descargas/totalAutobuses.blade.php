<!DOCTYPE html>
<html>
<head>
  <title>Listado de Autobuses</title>
  <link rel="stylesheet" type="text/css" href="css/custom-pdf.css">
</head>
<body>

  <div class="header">
    <h1>UNION DE CONDUCTORES 87007 A.C.</h1>
    <h2>RIF.: J-06000904-9</h2>
    <h4>Listado de Autobuses al {{ $fecha->format('d-m-Y') }}</h4>
    <img src="img/logo-simple.png" alt="logo">
  </div>

  <table>
    <thead>
      <tr>
        <th>Cedula</th>
        <th>Dueño</th>
        <th>Responsable</th>
      </tr>
    </thead>
    @foreach($buses as $bus)
      <tbody>
        <tr>
          <td>{{$bus->matricula}}</td>
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
        </tr>
      </tbody>
    @endforeach
  </table>
</body>
</html>