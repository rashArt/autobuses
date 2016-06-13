<!DOCTYPE html>
<html>
<head>
  <title>Listado de Textos</title>
  <link rel="stylesheet" type="text/css" href="css/custom-pdf.css">
</head>
<body>

  <h1>Listado de Textos</h1>

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