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
            'name' => 'Nabil Hakim',
            'email' => 'knabilhakin@gmail.com',
            'birthdate' => '2006-02-05',
            'major' => 'Teknik Informatika',
        ]);
    }
}
