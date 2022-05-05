<?php

namespace Tests\Feature;

use App\Models\User;
use Tests\TestCase;

class UserTest extends TestCase
{

    public function testGetLoginUserInformation(): void
    {
        $user = User::factory()->create();
        $this->getJson('api/user/' . $user->id)
            ->assertStatus(200);
    }
}
