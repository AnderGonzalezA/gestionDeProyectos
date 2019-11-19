<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h2>Proyecto {{$proyecto->id}}</h2>
    <ul>
      <li>Id: {{$proyecto->id}}</li>
      <li>Nombre: {{$proyecto->nombre}}</li>
      <li>Titulo: {{$proyecto->titulo}}</li>
      <li>Fecha inicio: {{$proyecto->fechainicio}}</li>
      <li>Fecha fin: {{$proyecto->fechafin}}</li>
      <li>Horas estimadas: {{$proyecto->horasestimadas}}</li>
      <li>Empleado: {{$proyecto->empleado->nombre . " " . $proyecto->empleado->apellido}}</li>
      <li><a href="{{route('proyecto.edit',$proyecto->id)}}">Edit</a></li>
      <li><a href="{{route('proyecto.destroy',$proyecto->id)}}">Destroy</a></li>
    </ul>
  </body>
</html>
