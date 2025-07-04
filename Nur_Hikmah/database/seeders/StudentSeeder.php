<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Student::create([
            'name' => 'Nur Hikmah',
            'email' => 'nhnurhikmah675@gmail.com',
            'birthdate' => '2005-07-06',
            'major' => 'Teknik Informatika',
        ]);
    }
}
