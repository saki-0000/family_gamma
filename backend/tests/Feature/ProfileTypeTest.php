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
        $this->postJson('api/profile/type', $params)
            ->assertSuccessful();
        $this->assertDatabaseHas('profile_types', $params);
    }

    public function testDeleteProfileType(): void
    {
        /** @var ProfileType $profileType */
        $profileType = ProfileType::factory()->create();
        $this->deleteJson('api/profile/type/' . $profileType->id)
            ->assertSuccessful();
        $this->assertModelMissing($profileType);
    }
}
