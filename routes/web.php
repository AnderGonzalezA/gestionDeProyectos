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

Route::get('/departamentos','DepartamentoController@index')->name('departamento.index');
