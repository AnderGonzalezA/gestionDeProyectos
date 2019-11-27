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
      @if (!is_null($empleado->proyectos))
        <li>Proyectos en los que colabora:
          @foreach($empleado->proyectos as $proyecto)
            <a href="{{route('empleado.show',$empleado->id)}}">{{$proyecto->nombre}}</a>
          @endforeach
        </li>
      @endif
      @if (!is_null($empleado->departamentoJefe))
        <li>Jefe del departamento: <a href="{{route('departamento.show',$empleado->departamentoJefe->id)}}">{{$empleado->departamento->nombre}}</a></li>
      @endif
    </ul>
  </body>
</html>
