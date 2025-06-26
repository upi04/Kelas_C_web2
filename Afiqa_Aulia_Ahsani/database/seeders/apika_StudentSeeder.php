<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\apika_student;

class apika_StudentSeeder extends Seeder
{
    public function run(): void
    {
        apika_student::create([
            'name' => 'Afiqa Aulia Ahsani',
            'email' => '6FbM2@example.com',
            'age' => 19,
        ]);
    }
}
