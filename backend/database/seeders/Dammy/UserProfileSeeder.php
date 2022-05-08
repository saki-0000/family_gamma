<?php

namespace Database\Seeders\Dammy;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\ProfileType;
use App\Models\User;
use App\Models\UserProfileDetail;
use Illuminate\Database\Seeder;

class UserProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /** @var User $user */
        $user = User::factory()->create();
        /** @var ProfileType $profileType */
        $profileType = ProfileType::factory()->create();
        $details = $profileType->userProfileDetails()->saveMany(
            UserProfileDetail::factory(3)->make()
        );
        $user->userprofileDetails()->saveMany($details);
    }
}
