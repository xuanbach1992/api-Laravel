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

Route::prefix('phones')->group(function () {

    Route::get('/',"api\PhoneController@getAll");
    Route::post('/create',"api\PhoneController@create");
    Route::delete('/{id}',"api\PhoneController@delete");
    Route::post('/{id}/find',"api\PhoneController@findById");
    Route::put('/{id}/edit',"api\PhoneController@update");
});

