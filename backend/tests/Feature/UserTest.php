<?php

namespace Tests\Feature;

use App\Models\ProfileType;
use App\Models\User;
use App\Models\UserProfileDetail;
use Illuminate\Database\Eloquent\Collection;
use Tests\TestCase;

class UserTest extends TestCase
{

    public function testGetLoginUserProfile(): void
    {
        /** @var User $user */
        $user = User::factory()->create();
        /** @var ProfileType $infomationType */
        $infomationType = ProfileType::factory()->create();
        /** @var Collection $details */
        $details = $infomationType->userProfileDetails()->saveMany(
            UserProfileDetail::factory(3)->make()
        );
        $user->userprofileDetails()->saveMany($details);

        $this->actingAs($user);
        $result = $this->getJson('api/user')
            ->assertStatus(200);

        $result->assertExactJson($details->toArray());
    }
}
