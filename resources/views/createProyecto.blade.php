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
    <?php
      $empleadoLibre = false;
      foreach ($empleados as $empleado){
        if (is_null($empleado->proyecto)){
          $empleadoLibre = true;
        }
      }
    ?>
      <h2>Crear proyecto</h2>
      <form class="" action="{{route('proyecto.store')}}" method="post">
        @csrf
        <label>Nombre: </label><input type="text" name="nombre" value=""><br>
        <label>Titulo: </label><input type="text" name="titulo" value=""><br>
        <label>Fecha inicio: </label><input type="text" name="fechainicio" value=""><br>
        <label>Fecha fin: </label><input type="text" name="fechafin" value=""><br>
        <label>Horas estimadas: </label><input type="text" name="horasestimadas" value=""><br>
        <input type="submit" name="" value="Store">
      </form>
  </body>
</html>
