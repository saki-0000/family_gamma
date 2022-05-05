<?php

namespace Tests\Feature;

use App\Models\InformationType;
use App\Models\User;
use App\Models\UserInformationDetail;
use Illuminate\Database\Eloquent\Collection;
use Tests\TestCase;

class UserTest extends TestCase
{

    public function testGetLoginUserInformation(): void
    {
        /** @var User $user */
        $user = User::factory()->create();
        /** @var InformationType $infomationType */
        $infomationType = InformationType::factory()->create();
        /** @var Collection $details */
        $details = $infomationType->userInformationDetails()->saveMany(
            UserInformationDetail::factory(3)->make()
        );
        $user->userinformationDetails()->saveMany($details);

        $this->actingAs($user);
        $result = $this->getJson('api/user')
            ->assertStatus(200);

        $result->assertExactJson($details->toArray());
    }
}
