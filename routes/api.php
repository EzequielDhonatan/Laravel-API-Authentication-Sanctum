<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\{

    Api\V1\Register\RegisterController,
    Api\V1\Login\LoginController,
    Api\V1\ForgotPassword\ForgotPasswordController,
    Api\V1\ResetPassword\ResetPasswordController,
    Api\V1\Me\MeController,
    Api\V1\MyProfile\MyProfileController,

}; // Controllers

Route::group([
    'prefix' => 'v1',
], function () {

    Route::post('register', RegisterController::class);
    Route::post('login', LoginController::class);
    Route::post('forgot-password', ForgotPasswordController::class);
    Route::post('reset-password', ResetPasswordController::class)->name('password.reset');

    Route::middleware(['auth:sanctum'])->group(function () {

        Route::get('me', MeController::class);
        Route::put('my-profile', MyProfileController::class);

    }); // Sanctum

}); // V1

Route::get('/', function () {
    return response()->json([
        'success'   => true,
    ], 200);
});
