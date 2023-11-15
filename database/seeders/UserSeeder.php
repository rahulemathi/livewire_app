<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        User::create([
            'name'=>'Code with Rahul',
            'email'=>'rahul@admin.com',
            'password' =>'$2y$12$jKWJrhuOUbraFkM8XyrF5u3IOlVehT2kNcRYrRG57/etsKupHb./y'
        ]);
    }
}
