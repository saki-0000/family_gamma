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
        for ($i = 0; $i < 3; $i++) {
            /** @var ProfileType $profileType */
            $profileType = ProfileType::factory()->create();
            $detail = $profileType->userProfileDetails()->save(
                UserProfileDetail::factory()->make()
            );
            $user->userprofileDetails()->save($detail);
        }
    }
}
