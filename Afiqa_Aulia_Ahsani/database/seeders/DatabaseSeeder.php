<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            apika_StudentSeeder::class,
        ]);

        User::factory()->create([
            'name' => 'Test User',
            'email' => '6FbM2@example.com',
        ]);
    }
}
