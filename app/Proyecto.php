<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
  protected $table = 'proyectos';
  public function proyectos()
  {
    return $this->hasMany('App\Proyecto');
  }
  public function empleado(){
    return $this->belongsto('App\Empleado');
  }
  public function empleados(){
    return $this->belongstomany('App\Empleado');
  }
}
