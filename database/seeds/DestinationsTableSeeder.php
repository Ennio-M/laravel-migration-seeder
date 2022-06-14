<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Destination;

class DestinationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 70; $i++){
            $newDestination = new Destination();

            $newDestination->city = $faker->city();
            $newDestination->state = $faker->country();
            $newDestination->description = $faker->paragraph(4);
            $newDestination->image = $faker->imageUrl(360, 360, 'cities', true);
            $newDestination->departure_date = $faker->date('Y_m_d');
            $newDestination->return_date = $faker->date('Y_m_d');
            $newDestination->price = $faker->randomFloat(2, 0, 9999);
    
            $newDestination->save();
        }
    }
}
