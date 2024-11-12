<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\{

    Api\V1\Login\LoginController,

}; // Controllers

Route::group([
    'prefix' => 'v1',
], function () {

    Route::post('login', LoginController::class);

}); // V1
