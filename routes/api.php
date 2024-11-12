<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return response()->json([
        'success'   => true,
    ], 200);
});

use App\Http\Controllers\{

    Api\V1\Register\RegisterController,
    Api\V1\Login\LoginController,
    Api\V1\ForgotPassword\ForgotPasswordController,
    Api\V1\ResetPassword\ResetPasswordController,

}; // Controllers

Route::group([
    'prefix' => 'v1',
], function () {

    Route::post('register', RegisterController::class);
    Route::post('login', LoginController::class);
    Route::post('forgot-password', ForgotPasswordController::class);
    Route::post('reset-password', ResetPasswordController::class)->name('password.reset');

}); // V1
