<?php

namespace Tests\Feature;

use App\Models\ProfileType;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ProfileTypeTest extends TestCase
{
    use RefreshDatabase;

    public function testCreateProfileType(): void
    {
        $params = ProfileType::factory()->definition();
        $this->assertDatabaseMissing('profile_types', $params);
        $this->postJson('api/infomataion/type', $params)
            ->assertStatus(201);
        $this->assertDatabaseHas('profile_types', $params);
    }
}
