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
      DB::table('empleados')->insert([
        'nombre' => 'Mikel',
        'apellido' => 'Mancisidor',
        'email' => 'mikel@gmail.com',
        'telefono' => '666666666',
      ]);
      DB::table('empleados')->insert([
        'nombre' => 'Ander',
        'apellido' => 'Juaristi',
        'email' => 'ander@gmail.com',
        'telefono' => '677777777',
      ]);
      DB::table('empleados')->insert([
        'nombre' => 'Iker',
        'apellido' => 'Sistiaga',
        'email' => 'iker@gmail.com',
        'telefono' => '688888888',
      ]);
    }
}
