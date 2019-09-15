<?php

use Illuminate\Database\Seeder;

class CarTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        for($i=0; $i<=5000; $i++):
            DB::table('cars')
                ->insert([
                    'CarManufactor' => $faker->name,
                    'CarModel' => $faker->name,
                    'CarYear' => $faker->year
                ]);
        endfor;
    }
}
