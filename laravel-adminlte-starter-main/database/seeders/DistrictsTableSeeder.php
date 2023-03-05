<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DistrictsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $districts = [
        ['name' => 'Dhaka', 'division_id' => 1],
        ['name' => 'Gazipur', 'division_id' => 1],
        ['name' => 'Manikganj', 'division_id' => 1],
        ['name' => 'Munshiganj', 'division_id' => 1],
        ['name' => 'Narayanganj', 'division_id' => 1],
        ['name' => 'Narsingdi', 'division_id' => 1],
        ['name' => 'Tangail', 'division_id' => 1],
        ['name' => 'Faridpur', 'division_id' => 1],
        ['name' => 'Gopalganj', 'division_id' => 1],
        ['name' => 'Kishoreganj', 'division_id' => 1],
        ['name' => 'Madaripur', 'division_id' => 1],
        ['name' => 'Rajbari', 'division_id' => 1],
        ['name' => 'Shariatpur', 'division_id' => 1],

        // Chittagong division
        ['name' => 'Chittagong', 'division_id' => 2],
        ['name' => 'Cox\'s Bazar', 'division_id' => 2],
        ['name' => 'Rangamati', 'division_id' => 2],
        ['name' => 'Bandarban', 'division_id' => 2],
        ['name' => 'Khagrachhari', 'division_id' => 2],
        ['name' => 'Noakhali', 'division_id' => 2],
        ['name' => 'Feni', 'division_id' => 2],
        ['name' => 'Lakshmipur', 'division_id' => 2],
        ['name' => 'Comilla', 'division_id' => 2],
        ['name' => 'Chandpur', 'division_id' => 2],
        ['name' => 'Brahmanbaria', 'division_id' => 2],

        // Rajshahi division
        ['name' => 'Rajshahi', 'division_id' => 3],
        ['name' => 'Bogra', 'division_id' => 3],
        ['name' => 'Pabna', 'division_id' => 3],
        ['name' => 'Joypurhat', 'division_id' => 3],
        ['name' => 'Naogaon', 'division_id' => 3],
        ['name' => 'Natore', 'division_id' => 3],
        ['name' => 'Chapainawabganj', 'division_id' => 3],
        ['name' => 'Sirajganj', 'division_id' => 3],

        // Khulna division
        ['name' => 'Khulna', 'division_id' => 4],
        ['name' => 'Bagerhat', 'division_id' => 4],
        ['name' => 'Chuadanga', 'division_id' => 4],
        ['name' => 'Jessore', 'division_id' => 4],
        ['name' => 'Jhenaidah', 'division_id' => 4],
        ['name' => 'Kushtia', 'division_id' => 4],
        ['name' => 'Magura', 'division_id' => 4],
        ['name' => 'Meherpur', 'division_id' => 4],
        ['name' => 'Narail', 'division_id' => 4],
        ['name' => 'Satkhira', 'division_id' => 4], 
         // Barisal division
        ['name' => 'Barisal', 'division_id' => 5],
        ['name' => 'Bhola', 'division_id' => 5],
        ['name' => 'Jhalokati', 'division_id' => 5],
        ['name' => 'Patuakhali', 'division_id' => 5],
        ['name' => 'Pirojpur', 'division_id' => 5],
        // Sylhet division
        ['name' => 'Sylhet', 'division_id' => 6],
        ['name' => 'Habiganj', 'division_id' => 6],
        ['name' => 'Moulvibazar', 'division_id' => 6],
        ['name' => 'Sunamganj', 'division_id' => 6],
        ['name' => 'Sylhet', 'division_id' => 6],    
        ];
    }
}
