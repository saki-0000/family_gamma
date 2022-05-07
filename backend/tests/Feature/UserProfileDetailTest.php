<?php

namespace Tests\Feature;

use App\Models\ProfileType;
use App\Models\User;
use App\Models\UserProfileDetail;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class UserProfileDetailTest extends TestCase
{
    use RefreshDatabase;

    public function testCreateUserProfileDetail(): void
    {
        /** @var User $user */
        $user = User::factory()->create();
        ProfileType::factory()->create();
        $params = UserProfileDetail::factory()->definition();
        $this->assertDatabaseMissing('user_profile_details', $params);
        $this->actingAs($user);
        $this->postJson('api/user/profile', $params)
            ->assertSuccessful();
        $this->assertDatabaseHas('user_profile_details', $params);
    }

    public function testDeleteUserProfileDetail(): void
    {
        ProfileType::factory()->create();
        /** @var UserProfileDetail $userProfileDetail */
        $userProfileDetail = UserProfileDetail::factory()->create();
        $this->deleteJson('api/user/profile/' . $userProfileDetail->id)
            ->assertSuccessful();
        $this->assertModelMissing($userProfileDetail);
    }
}
