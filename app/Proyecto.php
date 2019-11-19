<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
  protected $table = 'proyectos';

  public function empleado(){
    return $this->belongsto('App\Empleado');
  }

  public function empleados(){
    return $this->belongstomany('App\Empleado');
  }
}
