<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h2>Editar proyecto {{$proyecto->id}}</h2>
    <form class="" action="{{route('proyecto.update',$proyecto->id)}}" method="post">
      @csrf
      <label>Nombre: </label><input type="text" name="nombre" value="{{$proyecto->nombre}}"><br>
      <label>Titulo: </label><input type="text" name="titulo" value="{{$proyecto->titulo}}"><br>
      <label>Fecha inicio: </label><input type="text" name="fechainicio" value="{{$proyecto->fechainicio}}"><br>
      <label>Fecha fin: </label><input type="text" name="fechafin" value="{{$proyecto->fechafin}}"><br>
      <label>Horas estimadas: </label><input type="text" name="horasestimadas" value="{{$proyecto->horasestimadas}}"><br>
      <input type="submit" name="" value="Update">
    </form>
  </body>
</html>
