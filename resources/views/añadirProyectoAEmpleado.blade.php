@extends('layouts.app')
@section('content')
  <h2>Añadir un proyecto a un empleado como colaborador</h2>
  <form action="{{route('empleado_proyecto.store',$empleado_id)}}" method="post">
    @csrf
    <label>Proyecto: </label><select name="proyecto_id">
      @foreach ($proyectos as $proyecto)
        <option value="{{$proyecto->id}}">{{$proyecto->nombre}}</option>
      @endforeach
    </select>
    <label>Fecha fin:</label><input type="date" name="fechafin">
    <input type="submit" value="Añadir">
  </form>
@endsection
