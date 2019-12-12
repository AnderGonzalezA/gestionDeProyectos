@extends('layouts.app')
@section('content')
    <h2>Departamento {{$departamento->id}}</h2>
    <ul>
      <li>Id: {{$departamento->id}}</li>
      <li>Nombre: {{$departamento->nombre}}</li>
      @if(!is_null($departamento->empleados))
        <li>Empleados:
          @foreach ($departamento->empleados as $empleado)
            <a href="{{route('empleado.show',$empleado->id)}}">{{$empleado->nombre}}</a>
          @endforeach
        </li>
      @endif
      @if(!is_null($departamento->empleado))
        <li>Jefe:
            <a href="{{route('empleado.show',$departamento->empleado->id)}}">{{$departamento->empleado->nombre}}</a></li>
        </li>
      @endif
    </ul>
@endsection
