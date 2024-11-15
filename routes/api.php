<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\{

    Api\V1\Register\RegisterController,
    Api\V1\Login\LoginController,
    Api\V1\ForgotPassword\ForgotPasswordController,
    Api\V1\ResetPassword\ResetPasswordController,
    Api\V1\MyData\MyDataController,
    Api\V1\MyProfile\MyProfileController,
    Api\V1\MyPassword\MyPasswordController,
    Api\V1\Logout\LogoutController,

}; // Controllers

Route::group([
    'prefix' => 'v1',
], function () {

    Route::post('register', RegisterController::class);
    Route::post('login', LoginController::class);
    Route::post('forgot-password', ForgotPasswordController::class);
    Route::post('reset-password', ResetPasswordController::class)->name('password.reset');

    Route::middleware(['auth:sanctum'])->group(function () {

        Route::get('my-data', MyDataController::class);
        Route::put('my-profile', MyProfileController::class);
        Route::put('my-password', MyPasswordController::class);
        Route::post('logout', LogoutController::class);

    }); // Sanctum

}); // V1

Route::get('/', function () {
    return response()->json([
        'success'   => true,
    ], 200);
});
