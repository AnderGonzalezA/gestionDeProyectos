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
        <th>Departamento</th>
        <th>Nombre proyecto</th>
      </tr>
      @foreach ($empleados as $empleado)
        <tr>
          <td>{{$empleado->id}}</td>
          <td>{{$empleado->nombre}} {{$empleado->apellido}}</td>
          <td>{{$empleado->email}}</td>
          <td>{{$empleado->telefono}}</td>
          <td><a href="{{route('departamento.show',$empleado->departamento->id)}}">{{$empleado->departamento->nombre}}</a></td>
          <td>
            @if (!is_null($empleado->proyecto))
              <a href="{{route('proyecto.show',$empleado->proyecto->id)}}">{{$empleado->proyecto->nombre}}</a>
            @endif
          </td>
          <td><a href="{{route('empleado.show',$empleado->id)}}">Show</a></td>
        </tr>
      @endforeach
    </table>
  </body>
</html>
