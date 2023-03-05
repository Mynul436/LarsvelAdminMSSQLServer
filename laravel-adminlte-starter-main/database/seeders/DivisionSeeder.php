<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DivisionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('divisions')->insert([
            ['name' => 'Dhaka'],
            ['name' => 'Chittagong'],
            ['name' => 'Sylhet'],
            ['name' => 'Rajshahi'],
            ['name' => 'Khulna'],
            ['name' => 'Barisal'],
            ['name' => 'Rangpur'],
            ['name' => 'Mymensingh'],
        ]);
    }
}
