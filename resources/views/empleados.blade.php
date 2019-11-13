<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h2>Empleados</h2>
    <table>
      <tr>
        <th>Id</th>
        <th>Nombre</th>
        <th>Email</th>
        <th>Telefono</th>
      </tr>
      @foreach ($empleados as $empleado)
        <tr>
          <td>{{$empleado->id}}</td>
          <td>{{$empleado->nombre}}</td>
          <td>{{$empleado->apellido}}</td>
          <td>{{$empleado->email}}</td>
          <td>{{$empleado->telefono}}</td>
        </tr>
      @endforeach
    </table>
  </body>
</html>
