<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
*/


Route::group(['prefix' => 'v1', 'as' => 'api.', 'namespace' => 'App\Http\Controllers\API\V1'], function () {
    // Books
    Route::apiResource('books', 'BookApiController');

    // Users
//    Route::apiResource('users', 'UsersApiController');
});

//Route::apiResource('API/V1/books', BookApiController::class);
