<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BodegaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        for ($x = 0; $x < 5; $x++) {
            DB::table('bodegas')->insert(
                ['nombre' => $faker->name,
                    'localizacion' => $faker->address,
                    'email' => $faker->email,
                    'telefono' => $faker->phoneNumber,
                    'pagina_contacto' => $faker->companySuffix,
                    'anyo_fundacion' => $faker->year,
                    'if_restaurante' => random_int(0,1),
                    'if_hotel' => random_int(0,1)
                ]
            );
        }
    }
}
