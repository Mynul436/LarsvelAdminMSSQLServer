<?php

namespace Database\Seeders;

use Dotenv\Util\Str;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserTestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker::create();

        foreach (range(1, 10) as $index) {
            DB::table('users')->insert([
                'name' => $faker->name,
                'email' => $faker->unique()->safeEmail,
                'username' => $faker->unique()->userName,
                'is_approved' => $faker->boolean,
                'role' => $faker->randomElement(['admin', 'Retail Outlet Officer', 'Retail Territory Manager']),
                'is_locked' => $faker->boolean,
                // 'ref_number_roo/rtm' => $faker->randomNumber,
                'referer_id' => $faker->randomDigitNotNull,
                'email_verified_at' => now(),
                'password' => Hash::make('password'),
                //  'remember_token' => $faker->randomElement([Str::random(10), null]),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}