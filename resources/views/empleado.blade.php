<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h2>Empleado {{$empleado->id}}</h2>
    <ul>
      <li>{{$empleado->id}}</li>
        <li>{{$empleado->nombre}} {{$empleado->apellido}}</li>
        <li>{{$empleado->email}}</li>
        <li>{{$empleado->telefono}}</li>
        <li>
          @if (!is_null($empleado->proyecto))
            <a href="{{route('proyecto.show',$empleado->proyecto->id)}}">{{$empleado->proyecto->nombre}}</a>
          @endif
        </li>
        <li><a href="{{route('empleado.show',$empleado->id)}}">Show</a></li>
      </ul>
  </body>
</html>
