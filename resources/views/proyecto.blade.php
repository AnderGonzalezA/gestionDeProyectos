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
    <h2>Proyecto {{$proyecto->id}}</h2>
    <ul>
      <li>Id: {{$proyecto->id}}</li>
      <li>Nombre: {{$proyecto->nombre}}</li>
      <li>Titulo: {{$proyecto->titulo}}</li>
      <li>Fecha inicio: {{$proyecto->fechainicio}}</li>
      <li>Fecha fin: {{$proyecto->fechafin}}</li>
      <li>Horas estimadas: {{$proyecto->horasestimadas}}</li>
      <li>Empleado: {{$proyecto->empleado->nombre . " " . $proyecto->empleado->apellido}}</li>
      @if (!is_null($proyecto->empleados))
        <li>Empleados que colaboran:
          @foreach($proyecto->empleados as $empleado)
            <a href="{{route('empleado.show',$empleado->id)}}">{{$empleado->nombre}} </a>
          @endforeach
        </li>
      @endif
      <li><a href="{{route('proyecto.edit',$proyecto->id)}}">Edit</a></li>
      <li><a href="{{route('proyecto.destroy',$proyecto->id)}}">Destroy</a></li>
    </ul>
  </body>
</html>
