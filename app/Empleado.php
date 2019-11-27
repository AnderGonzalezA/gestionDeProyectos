<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
  protected $table = 'empleados';

  public function proyecto(){
    return $this->hasone('App\Proyecto');
  }

  public function departamento(){
    return $this->belongsto('App\Departamento');
  }

  public function proyectos(){
    return $this->belongstomany('App\Proyecto')->withPivot('fechainicio', 'fechafin');
  }

  public function departamento(){
    return $this->belongsto('App\Departamento');
  }
}
