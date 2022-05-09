<?php

namespace App\Http\Controllers;

use App\Models\ProfileType;
use Illuminate\Http\Request;

class ProfileTypeController extends Controller
{
    public function index()
    {
        return ProfileType::all();
    }
    public function store(Request $request)
    {
        return ProfileType::create($request->all());
    }
    public function destroy(ProfileType $profileType)
    {
        return $profileType->delete();
    }
}
