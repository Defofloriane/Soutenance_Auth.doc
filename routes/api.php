<?php

use App\Http\Controllers\ApiController;
use App\Http\Controllers\ArchiveController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::middleware('api')->group(function () {
    Route::get('/users', [UserController::class, 'index']);
    Route::post('/endpoint', [UserController::class, 'endpoint']);
    Route::post('/decode', [ApiController::class, 'decode']);
    Route::post('/getUser', [ApiController::class, 'getUser']);
    Route::post('/store',[ApiController::class,'store']);
 
});