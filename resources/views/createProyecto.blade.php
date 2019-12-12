@extends('layouts.app')
@section('content')
      <h2>Crear proyecto</h2>
      <form class="" action="{{route('proyecto.store')}}" method="post">
        @csrf
        <label>Nombre: </label><input type="text" name="nombre" value=""><br>
        <label>Titulo: </label><input type="text" name="titulo" value=""><br>
        <label>Fecha inicio: </label><input type="text" name="fechainicio" value=""><br>
        <label>Fecha fin: </label><input type="text" name="fechafin" value=""><br>
        <label>Horas estimadas: </label><input type="text" name="horasestimadas" value=""><br>
        <input type="submit" name="" value="Store">
      </form>
@endsection
