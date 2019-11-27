<?php

use Illuminate\Database\Seeder;
use App\Departamento;

class DepartamentosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('departamentos')->insert([
        'nombre' => 'Informática'
      ]);
      DB::table('departamentos')->insert([
        'nombre' => 'Marketing'
      ]);
      DB::table('departamentos')->insert([
        'nombre' => 'Relaciones públicas'
      ]);
      for ($i=0;$i<10;$i++){
        factory(Departamento::class)->create();
      }
    }
}
