<?php

use App\Http\Controllers\ProfileTypeController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/auth/user', function (Request $request) {
    return $request->user();
});
Route::controller(UserController::class)->group(function () {
    Route::get('/user', 'show');
});
Route::controller(ProfileTypeController::class)->group(function () {
    Route::post('/profile/type', 'store');
    Route::delete('/profile/type/{profileType}', 'destroy');
});
Route::get('/', function () {
    return 'Hello';
});
