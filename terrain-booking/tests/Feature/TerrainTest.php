<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Laravel\Sanctum\Sanctum;
use Tests\TestCase;

class TerrainTest extends TestCase
{
    use RefreshDatabase;

    public function test_user_can_create_terrain()
    {
        $user = User::factory()->create();

        // ✅ Use Sanctum to authenticate
        Sanctum::actingAs($user);

        $response = $this->postJson('/api/terrains', [
            'title' => 'Football Field',
            'description' => 'Nice grass field',
            'price_per_hour' => 80,
            
        ]);

        $response->assertStatus(201)
                 ->assertJson([
                    'message' => 'Created successfully',

                 ]);
    }
}
