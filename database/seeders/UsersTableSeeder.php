<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
               'name'=>'Admin',
               'role'=>'admin',
               'email'=>'admin@gmail.com',
               'password'=>bcrypt('123456'),
               'mobile'=>'123456'
            ]);

            User::create([
                'name'=>'Manager',
                'role'=>'Manager',
                'email'=>'manager@gmail.com',
                'password'=>bcrypt('123456'),
                'mobile'=>'123456'
             ]);

             User::create([
                'name'=>'User',
                'role'=>'customer',
                'email'=>'customer@gmail.com',
                'password'=>bcrypt('123456'),
                'mobile'=>'123456'
             ]);

             
    }
}
