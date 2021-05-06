<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role1 = Role::create([
            "user_profile" => "user",
        ]);

        $role2 = Role::create([
            "user_profile" => "admin",
        ]);


        $user1 = User::create([
            "role_id" => $role1->id,
            "name" => "KABORE Tanguy",
            "user_phone_number" => "75643226",
            "email" => "tanguy.kabore@jmarket.com",
            "password" => Hash::make("12345678"),
        ]);

        $user2 = User::create([
            "role_id" => $role1->id,
            "name" => "admin",
            "user_phone_number" => "75643226",
            "email" => "admin@jmarket.com",
            "password" => Hash::make("12345678"),
        ]);

    }
}
