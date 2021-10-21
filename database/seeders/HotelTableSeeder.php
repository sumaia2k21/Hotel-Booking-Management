<?php

namespace Database\Seeders;

use App\Models\Hotel;
use Illuminate\Database\Seeder;

class HotelTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       Hotel::create([
           'name'=>'Dream House',
           'email'=>'hotel@gmail.com',
           'address'=>'Dream House',
           'contact_no'=>'Dream House'
           
       ]);
    }
}
