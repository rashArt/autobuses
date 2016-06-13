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
        <th>Nombre y Apellido</th>
        <th>Codigo</th>
        <th>Correo</th>
      </tr>
    </thead>
    @foreach($personas as $persona)
      <tbody>
        <tr>
          <td>{{$persona->cedula}}</td>
          <td>{{$persona->nombres}} {{$persona->apellidos}}</td>
          <td>{{$persona->codigo}}</td>
          <td>{{$persona->user->email}}</td>
        </tr>
      </tbody>
    @endforeach
  </table>
</body>
</html>