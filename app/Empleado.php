<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
  protected $table = 'empleados';

  public function empleados()
  {
      return $this->hasMany('App\Empleado');
  }
}
