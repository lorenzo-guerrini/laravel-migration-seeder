<?php

use Illuminate\Database\Seeder;
use App\Travel;
use Faker\Generator as Faker;

class TravelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 20; $i++) {
            $newTravel = new Travel();
            $newTravel->location = $faker->country();
            $newTravel->depart_date = $faker->date();
            $newTravel->return_date = $faker->date();
            $newTravel->price = $faker->randomFloat(2);

            $newTravel->save();
        }
    }
}
