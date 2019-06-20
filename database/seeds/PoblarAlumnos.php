<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class PoblarAlumnos extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $poblar = Faker::create('es_ES');

        for ($n = 0; $n < 100; $n++)
            \App\Alumno::create([
                'edad' => $poblar->numberBetween(1, 100),
                'nombre' => $poblar->name,
                'email' => $poblar->email,
                'direccion' => $poblar->address,
                'estudios' => $poblar->randomElement(['basicos', 'intesos', 'medios'])
            ]);


        /*

          $faker = Faker::create('es_ES');
          for ($n = 1; $n < 50; $n++) {
          Alumno::create([
          'edad' => $faker->randomNumber(),
          'nombre' => $faker->name,
          'email' => $faker->email,
          'direccion' => $faker->address,
          'estudios' => $faker->randomElement(["Bachiller", "Ciclo", "Universidad"])
          ]);
          }
         * */
    }

}
