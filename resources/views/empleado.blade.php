<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h2>Empleado {{$empleado->id}}</h2>
    <ul>
      <li>Id: {{$empleado->id}}</li>
      <li>Nombre: {{$empleado->nombre}} {{$empleado->apellido}}</li>
      <li>Email: {{$empleado->email}}</li>
      <li>Telefono: {{$empleado->telefono}}</li>
      @if (!is_null($empleado->proyecto))
        <li>Proyecto:
          <a href="{{route('proyecto.show',$empleado->proyecto->id)}}">{{$empleado->proyecto->nombre}}</a>
        </li>
      @endif
      <li>Departamento: <a href="{{route('departamento.show',$empleado->departamento->id)}}">{{$empleado->departamento->nombre}}</a></li>
    </ul>
  </body>
</html>
