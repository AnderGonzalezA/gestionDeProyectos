<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.min.css') }}" />
  </head>
  <body>
    <nav class="navbar navbar-expand-sm bg-light">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="{{route('empleado.index')}}">Empleados</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('proyecto.index')}}">Proyectos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('departamento.index')}}">Departamentos</a>
        </li>
      </ul>
    </nav>
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
