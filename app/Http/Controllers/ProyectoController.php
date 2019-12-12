<?php

namespace App\Http\Controllers;

use App\Proyecto;
use App\Empleado;
use Illuminate\Http\Request;
use Carbon\Carbon;

class ProyectoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $proyectos = Proyecto::all();
        return view('proyectos',['proyectos'=>$proyectos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $empleados = Empleado::all();
        return view('createProyecto',['empleados'=>$empleados]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $proyecto = new Proyecto;

        $proyecto->nombre = $request->input('nombre');
        $proyecto->titulo = $request->input('titulo');
        $proyecto->fechainicio = $request->input('fechainicio');
        $proyecto->fechafin = $request->input('fechafin');
        $proyecto->horasestimadas = $request->input('horasestimadas');

        $proyecto->save();

        $proyectos = Proyecto::all();
        return view('proyectos',['proyectos'=>$proyectos]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $proyecto = Proyecto::find($id);
        return view('proyecto',['proyecto'=>$proyecto]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $proyecto = Proyecto::find($id);
        return view('editProyecto',['proyecto'=>$proyecto]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $proyecto = Proyecto::find($id);

        $proyecto->nombre = $request->input('nombre');
        $proyecto->titulo = $request->input('titulo');
        $proyecto->fechainicio = $request->input('fechainicio');
        $proyecto->fechafin = $request->input('fechafin');
        $proyecto->horasestimadas = $request->input('horasestimadas');

        $proyecto->save();

        $proyectos = Proyecto::all();
        return view('proyectos',['proyectos'=>$proyectos]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Proyecto::find($id)->delete();

        $proyectos = Proyecto::all();

        return view('proyectos',['proyectos'=>$proyectos]);
    }

    public function actuales(){
        $proyectos = Proyecto::all()->where('fechafin', '>', Carbon::now('Europe/Madrid'));
        return view('proyectos',['proyectos'=>$proyectos]);
    }
}
