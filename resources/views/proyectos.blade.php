<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h2>Proyectos</h2>
    <table>
      <tr>
        <th>Id</th>
        <th>Nombre</th>
        <th>Titulo</th>
        <th>Fecha Inicio</th>
        <th>Fecha fin</th>
        <th>Horas estimadas</th>
        <th>Nombre empleado</th>
      </tr>
      @foreach ($proyectos as $proyecto)
        <tr>
          <td>{{$proyecto->id}}</td>
          <td>{{$proyecto->nombre}}</td>
          <td>{{$proyecto->titulo}}</td>
          <td>{{$proyecto->fechainicio}}</td>
          <td>{{$proyecto->fechafin}}</td>
          <td>{{$proyecto->horasestimadas}}</td>
          <td><a href="{{route('empleado.show',$proyecto->empleado->id)}}">{{$proyecto->empleado->nombre . " " . $proyecto->empleado->apellido}}</a></td>
          <td><a href="{{route('proyecto.show',$proyecto->id)}}">Show</a></td>
          <td><a href="{{route('proyecto.edit',$proyecto->id)}}">Edit</a></td>
          <td><a href="{{route('proyecto.destroy',$proyecto->id)}}">Destroy</a></td>
        </tr>
      @endforeach
      <tr>
        <td><a href="{{route('proyecto.create')}}">Create</a></td>
      </tr>
    </table>
  </body>
</html>
