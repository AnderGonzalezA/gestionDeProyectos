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
          <a class="nav-link" href="{{route('empleadoIndex')}}">Empleados</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('proyectoIndex')}}">Proyectos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('departamentoIndex')}}">Departamentos</a>
        </li>
      </ul>
    </nav>
  </body>
</html>
