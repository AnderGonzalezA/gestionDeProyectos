<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Gestión de proyectos</title>
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
        <li class="nav-item">
          <a class="nav-link" href="{{route('listados')}}">Listados</a>
        </li>
      </ul>
    </nav>
    <div class="container">
      @yield('content')
    </div>
  </body>
</html>
