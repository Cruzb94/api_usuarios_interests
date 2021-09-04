<?php

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::group([
    'prefix' => 'auth'
], function () {
    Route::post('login', [App\Http\Controllers\AuthController::class, 'login'])->name('login');
    Route::post('signup', [App\Http\Controllers\AuthController::class, 'signUp'])->name('signUp');

    Route::group([
      'middleware' => 'auth:api'
    ], function() {
        Route::get('logout',[App\Http\Controllers\AuthController::class, 'logout'])->name('logout');
        Route::get('user', [App\Http\Controllers\AuthController::class, 'user'])->name('user');
        Route::get('users_online', [App\Http\Controllers\AuthController::class, 'users_online'])->name('users_online');
        Route::post('save-interest',[App\Http\Controllers\InterestController::class, 'saveInterest'])->name('save-interest');
        Route::get('interests', [App\Http\Controllers\InterestController::class, 'getInterests'])->name('interests');
        Route::post('interests-user', [App\Http\Controllers\InterestController::class, 'getInterestsUser'])->name('interests-user');
        Route::post('save-interests', [App\Http\Controllers\InterestController::class, 'saveInterestUser'])->name('save-interests');
    });
});
