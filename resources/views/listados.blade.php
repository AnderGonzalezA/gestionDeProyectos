@extends('layouts.app')
@section('content')
    <h2>Listados</h2>
    <ul>
      <li><a href="{{route('proyecto.actuales')}}">Proyectos actuales: proyectos cuya fecha fin es mayor a la actual.</</li>
      <li><a href="{{route('empleado.noresponsables')}}">Empleados que no son responsables de ningún proyecto en la fecha actual ni en fechas posteriores.</</li>
      <li><a href="{{route('empleado.multiproyectos')}}">Empleados que colaboran en más de un proyecto en la fecha actual</</li>
    </ul>
@endsection
