<?php

namespace App\Http\Controllers;

use App\Models\InformationType;
use Illuminate\Http\Request;

class InformationTypeController extends Controller
{
    public function store(Request $request)
    {
        return InformationType::create($request->all());
    }
}
