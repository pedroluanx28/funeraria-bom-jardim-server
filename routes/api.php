<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OnlineFuneralController;
use App\Http\Controllers\AuthController;
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

Route::middleware('auth:sanctum')->group(function () {
    Route::group(['prefix' => '/online-funeral'], function () {
        Route::get('/', [OnlineFuneralController::class, 'index']);
        Route::get('/{id}', [OnlineFuneralController::class, 'show']);
        Route::post('/', [OnlineFuneralController::class, 'store']);
        Route::post('/enter-in-room', [OnlineFuneralController::class, 'enterInRoom']);
        Route::put('/{id}', [OnlineFuneralController::class, 'update']);
        Route::put('/change-status/{id}', [OnlineFuneralController::class, 'changeStatus']);
    });

    Route::get('/me', [UserController::class, 'me']);
});

Route::post('/login', [AuthController::class, 'login']);
