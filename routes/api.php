<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

//get lagu daerah
Route::get('/lagudaerah', [App\Http\Controllers\Api\LaguController::class, 'index']);

//create lagu daerah
Route::post('/lagudaerah', [App\Http\Controllers\Api\LaguController::class, 'create']);

//update lagu daerah
Route::post('/lagudaerah/{id}', [App\Http\Controllers\Api\LaguController::class, 'update']);

//delete lagu daerah
Route::delete('/lagudaerah/{id}', [App\Http\Controllers\Api\LaguController::class, 'delete']);
