<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserProfileDetail;
use Illuminate\Http\Request;

class UserProfileDetailController extends Controller
{
    public function store(Request $request)
    {
        /** @var User $user */
        $user = $request->user();
        return $user->userProfileDetails()->create($request->all());
    }
    public function destroy(UserProfileDetail $userProfileDetail)
    {
        return $userProfileDetail->delete();
    }
}
