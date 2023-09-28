<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i = 0; $i < 10; $i++) {
            $newTrain = new Train();

            $newTrain->company = $faker->company();
            $newTrain->departure_station = $faker->city();
            $newTrain->arrival_station = $faker->city();
            $newTrain->date = $faker->dateTimeInInterval("-7days", "+14days");
            $newTrain->departure_time = $faker->time('H:i');
            $newTrain->arrival_time = $faker->time('H:i');
            $newTrain->train_id = $faker->numberBetween(1000, 9999);
            $newTrain->wagons_number = $faker->numberBetween(0, 15);
            $newTrain->on_time = $faker->boolean();
            $newTrain->save();
        }
    }
}