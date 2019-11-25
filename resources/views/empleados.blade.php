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
    <h2>Empleados</h2>
    <table>
      <tr>
        <th>Id</th>
        <th>Nombre</th>
        <th>Email</th>
        <th>Telefono</th>
        <th>Departamento</th>
        <th>Nombre proyecto</th>
      </tr>
      @foreach ($empleados as $empleado)
        <tr>
          <td>{{$empleado->id}}</td>
          <td>{{$empleado->nombre}} {{$empleado->apellido}}</td>
          <td>{{$empleado->email}}</td>
          <td>{{$empleado->telefono}}</td>
          <td><a href="{{route('departamento.show',$empleado->departamento->id)}}">{{$empleado->departamento->nombre}}</a></td>
          <td>
            @if (!is_null($empleado->proyecto))
              <a href="{{route('proyecto.show',$empleado->proyecto->id)}}">{{$empleado->proyecto->nombre}}</a>
            @endif
          </td>
          <td><a href="{{route('empleado.show',$empleado->id)}}">Show</a></td>
        </tr>
      @endforeach
    </table>
  </body>
</html>
