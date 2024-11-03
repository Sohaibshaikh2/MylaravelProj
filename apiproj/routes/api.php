<?php

use App\Http\Controllers\EmployesController;
use App\Http\Controllers\UserAuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');


Route::get('/', function () {

    return ["name" => "Sohaib", "Email" => "SohaibShaikh270@gmail.com"];
});

Route::post('api/signup', [UserAuthController::class, 'signup']);
Route::post('api/login', [UserAuthController::class, 'login']);


Route::group(['middleware' => "auth:sanctum"], function () {

    Route::get('api/get', [EmployesController::class, 'get']);
    Route::post('api/Add', [EmployesController::class, 'Add']);
    Route::put('api/update', [EmployesController::class, 'update']);
    Route::delete('api/delete/{id}', [EmployesController::class, 'delete']);
    
});


Route::get('api/login', [UserAuthController::class, 'login'])->name('login');
