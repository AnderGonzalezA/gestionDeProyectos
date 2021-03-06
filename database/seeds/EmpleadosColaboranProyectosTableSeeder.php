<?php

use Illuminate\Database\Seeder;

class EmpleadosColaboranProyectosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $fecha = date('Y/m/d');
        for ($i=0; $i < 15; $i++) {
          $fechainicio = strtotime ( "+".rand(1,31)." day" , strtotime ( $fecha ) ) ;
          $fechainicio = date ( 'Y/m/d' , $fechainicio);

          $fechafin = strtotime ( "+".rand(30,500)." day" , strtotime ( $fecha ) ) ;
          $fechafin = date ( 'Y/m/d' , $fechafin );

          DB::table('empleado_proyecto')->insert([
            'empleado_id' => rand(0,19),
            'proyecto_id' => rand(1,20),
            'fechainicio' => $fechainicio,
            'fechafin'  => $fechafin
          ]);
        }
    }
}
