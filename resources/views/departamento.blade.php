<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h2>Departamento {{$departamento->id}}</h2>
    <ul>
      <li>Id: {{$departamento->id}}</li>
      <li>Nombre: {{$departamento->nombre}}</li>
      @if(!is_null($departamento->empleados))
        <li>Empleados:
          @foreach ($departamento->empleados as $empleado)
            <a href="{{route('empleado.show',$empleado->id)}}">{{$empleado->nombre}}</a>
          @endforeach
        </li>
      @endif
    </ul>
  </body>
</html>
