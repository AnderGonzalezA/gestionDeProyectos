<?php

use Illuminate\Database\Seeder;

class EmpleadosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      for ($i=0;$i<20;$i++) {
        DB::table('empleados')->insert([
          'nombre' => Str::random(10),
          'apellido' => Str::random(20),
          'email' => Str::random(10)."",
          'telefono'  => Str::random(9),
          'departamento_id' => rand(1,3)
        ]);
      }
    }
}
