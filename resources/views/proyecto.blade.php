@extends('layouts.app')
@section('content')
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
@endsection
