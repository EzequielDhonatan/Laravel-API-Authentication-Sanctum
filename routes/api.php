<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\{

    Api\V1\Register\RegisterController,
    Api\V1\Login\LoginController,

}; // Controllers

Route::group([
    'prefix' => 'v1',
], function () {

    Route::post('register', RegisterController::class);
    Route::post('login', LoginController::class);

}); // V1
