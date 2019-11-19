<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      $empleadoLibre = false;
      foreach ($empleados as $empleado){
        if (is_null($empleado->proyecto)){
          $empleadoLibre = true;
        }
      }
    ?>
    @if ($empleadoLibre)
      <h2>Crear proyecto</h2>
      <form class="" action="{{route('proyecto.store')}}" method="post">
        @csrf
        <label>Nombre: </label><input type="text" name="nombre" value=""><br>
        <label>Titulo: </label><input type="text" name="titulo" value=""><br>
        <label>Fecha inicio: </label><input type="text" name="fechainicio" value=""><br>
        <label>Fecha fin: </label><input type="text" name="fechafin" value=""><br>
        <label>Horas estimadas: </label><input type="text" name="horasestimadas" value=""><br>
        <label>Empleado: </label><select class="" name="empleado_id">
          @foreach ($empleados as $empleado)
            @if (is_null($empleado->proyecto))
              <option value='{{$empleado->id}}'>{{ucfirst($empleado->nombre)}}</option>
            @endif
          @endforeach
        </select>
        <input type="submit" name="" value="Store">
      </form>
    @else
      Primero tienes que añadir un empleado que no tenga asignado un proyecto
    @endif
  </body>
</html>
