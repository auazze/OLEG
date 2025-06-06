<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory()->create([
            'name'  => 'Test user',
            'email' => 'test@example.com',
        ]);

        $this->call(RolePermissionSeeder::class);
    }
}
