<?php

namespace Database\Seeders;

use App\Models\Mpert4;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Spert4 extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Mpert4::create([
            'name' => 'Nakim',
            'email' => 'knabilhakin@gmail.com',
            'age' => 19
        ]);
        Mpert4::create([
            'name' => 'Nabil',
            'email' => 'knabilhakin1@gmail.com',
            'age' => 20
        ]);
        Mpert4::create([
            'name' => 'Hakim',
            'email' => 'knabilhakin2@gmail.com',
            'age' => 21
        ]);
    }
}
