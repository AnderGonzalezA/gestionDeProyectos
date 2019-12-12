@extends('layouts.app')
@section('content')
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
@endsection
