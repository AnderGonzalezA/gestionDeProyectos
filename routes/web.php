<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/empleados','EmpleadoController@index')->name('empleado.index');

Route::get('/empleados/{id}','EmpleadoController@show')->name('empleado.show');

Route::get('/proyectos','ProyectoController@index')->name('proyecto.index');

Route::get('/proyectos/{id}','ProyectoController@show')->name('proyecto.show');

Route::get('/proyecto/create','ProyectoController@create')->name('proyecto.create');

Route::post('/proyecto/store','ProyectoController@store')->name('proyecto.store');

Route::get('/proyectos/{id}/edit','ProyectoController@edit')->name('proyecto.edit');

Route::post('/proyectos/{id}/update','ProyectoController@update')->name('proyecto.update');

Route::get('/proyectos/{id}/destroy','ProyectoController@destroy')->name('proyecto.destroy');

Route::get('/departamentos','DepartamentoController@index')->name('departamento.index');

Route::get('/departamentos/{id}','DepartamentoController@show')->name('departamento.show');

Route::get('/listados',function(){
  return view('listados');
})->name('listados');

Route::get('/proyectosactuales','ProyectoController@actuales')->name('proyecto.actuales');

Route::get('/empleadosnoresponsables','EmpleadoController@noresponsables')->name('empleado.noresponsables');

Route::get('/empleadosmultiproyectos','EmpleadoController@multiproyectos')->name('empleado.multiproyectos');

Route::get('/empleado/{id}/añadirproyecto','Empleado_ProyectoController@create')->name('empleado_proyecto.create');

Route::post('/empleado/{id}/storeproducto','Empleado_ProyectoController@store')->name('empleado_proyecto.store');
