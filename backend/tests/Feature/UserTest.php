<?php

namespace Tests\Feature;

use App\Models\ProfileType;
use App\Models\User;
use App\Models\UserProfileDetail;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class UserTest extends TestCase
{
    use RefreshDatabase;

    public function testGetLoginUserProfile(): void
    {
        /** @var User $user */
        $user = User::factory()->create();
        /** @var ProfileType $profileType */
        $profileType = ProfileType::factory()->create();
        /** @var Collection $details */
        $details = $profileType->userProfileDetails()->saveMany(
            UserProfileDetail::factory(3)->make()
        );
        $user->userprofileDetails()->saveMany($details);

        $this->actingAs($user);
        $result = $this->getJson('api/user')
            ->assertStatus(200);

        $result->assertExactJson($details->toArray());
    }
}
