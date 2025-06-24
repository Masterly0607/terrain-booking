<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Terrain;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
       // Create a user first
    $user = \App\Models\User::factory()->create([
        'name' => 'Masterly Sok',
        'email' => 'sok@example.com',
    ]);

    // Then use that user’s id
    \App\Models\Terrain::factory(10)->create([
        'owner_id' => $user->id,
    ]);
    }
}
