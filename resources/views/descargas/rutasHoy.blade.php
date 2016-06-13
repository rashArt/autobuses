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