<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h2>Proyecto {{$proyecto->id}}</h2>
    <ul>
      <li>{{$proyecto->id}}</li>
      <li>{{$proyecto->nombre}}</li>
      <li>{{$proyecto->titulo}}</li>
      <li>{{$proyecto->fechainicio}}</li>
      <li>{{$proyecto->fechafin}}</li>
      <li>{{$proyecto->horasestimadas}}</li>
      <li>{{$proyecto->empleado->nombre . " " . $proyecto->empleado->apellido}}</li>
      <li><a href="{{route('proyecto.show',$proyecto->id)}}">Show</a></li>
    </ul>
  </body>
</html>
