<?php

namespace Database\Seeders;

use App\Models\ProfileType;
use App\Models\User;
use App\Models\UserProfileDetail;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        /** @var User $user */
        $user = User::factory()->create();
        ProfileType::factory()->create();
        $details = UserProfileDetail::factory(3)->make();
        $user->userprofileDetails()->saveMany($details);
    }
}
