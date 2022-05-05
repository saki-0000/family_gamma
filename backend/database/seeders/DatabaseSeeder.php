<?php

namespace Database\Seeders;

use App\Models\informationType;
use App\Models\User;
use App\Models\UserInformationDetail;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        informationType::factory()->create();
        $details = UserInformationDetail::factory(3)->make();
        $user->userinformationDetails()->saveMany($details);
    }
}
