<?php

namespace App\Http\Controllers;

use App\Models\ProfileType;
use Illuminate\Http\Request;

class ProfileTypeController extends Controller
{
    public function store(Request $request)
    {
        return ProfileType::create($request->all());
    }
}
