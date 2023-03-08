<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Laravolt\Avatar\Avatar;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        

        

        // $avatar = new Avatar();
        // $image = time() . ".png";
        // $avatar->create('Budi Rahmat')
        // ->save(storage_path('app/public/profile_images/' . $image));
        // $saveImage = "profile_images/" . $image;
        $user = User::create([
            'name' => 'Admin system',
            'username' => 'superadmin',
            'is_approved' => true,
            'email' => 'superadmin@example.com',
            'password' => Hash::make('password'),
            // 'image' => $saveImage,
            'is_locked' => false,
            'ref_number_roo_rtm' => '1234567890',
            'referer_id' => 1,
            'role' => 'admin',
            'is_superadmin' => true,
        ]);
        $role = Role::findById(1);
        $user->assignRole($role->name);

    }
}
