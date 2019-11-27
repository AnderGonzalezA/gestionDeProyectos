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
    <h2>Departamentos</h2>
    <table>
      <tr>
        <th>Id</th>
        <th>Nombre</th>
        <th>Jefe</th>
      </tr>
      @foreach ($departamentos as $departamento)
        <tr>
          <td>{{$departamento->id}}</td>
          <td>{{$departamento->nombre}}</td>
          <td>
          @if (!is_null($departamento->empleado))
            <a href="{{route('empleado.show',$departamento->empleado->id)}}">{{$departamento->empleado->nombre}}</a>
          @endif
          </td>
          <td><a href="{{route('departamento.show',$departamento->id)}}">Show</a></td>
        </tr>
      @endforeach
    </table>
  </body>
</html>
