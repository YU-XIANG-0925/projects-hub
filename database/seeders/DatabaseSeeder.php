<?php

namespace Database\Seeders;

use App\Enums\UserRole;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name'  => 'SMTester',
            'email' => 'smallwind@mail.20230609.xyz',
            'phone' => '0912345678',
            'role'  => UserRole::Admin,
            'password' => 'password', 
        ]);

        $this->call(ProjectSeeder::class);
    }
}
