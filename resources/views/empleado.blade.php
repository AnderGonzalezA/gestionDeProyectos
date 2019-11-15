<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h2>Empleado {{$empleado->id}}</h2>
    <table>
      <tr>
        <th>Id</th>
        <th>Nombre</th>
        <th>Email</th>
        <th>Telefono</th>
        <th>Nombre proyecto</th>
      </tr>
      <tr>
        <td>{{$empleado->id}}</td>
        <td>{{$empleado->nombre}} {{$empleado->apellido}}</td>
        <td>{{$empleado->email}}</td>
        <td>{{$empleado->telefono}}</td>
        <td>
          @if (!is_null($empleado->proyecto))
            <a href="{{route('proyecto.show',$empleado->proyecto->id)}}">{{$empleado->proyecto->nombre}}</a>
          @endif
        </td>
        <td><a href="{{route('empleado.show',$empleado->id)}}">Show</a></td>
      </tr>
    </table>
  </body>
</html>