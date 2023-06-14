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
        User::create([
            'name'=>'Laravel',
            'email'=>'as@gmail.com',
            'password'=> bcrypt('123'),
        ]);
        User::create([
            'name'=>'Laravel',
            'email'=>'ad@gmail.com',
            'password'=> bcrypt('123'),
        ]);
    }
}
