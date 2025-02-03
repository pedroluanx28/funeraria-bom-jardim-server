<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OnlineFuneralController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BenefitController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MessagesController;
use App\Http\Controllers\ConfigurationController;
use App\Http\Controllers\PlanController;

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
        Route::post('/', [OnlineFuneralController::class, 'store']);
        Route::put('/{id}', [OnlineFuneralController::class, 'update']);
        Route::put('/change-status/{id}', [OnlineFuneralController::class, 'changeStatus']);
        Route::put('/add-operating-period/{id}', [OnlineFuneralController::class, 'addOperatingPeriod']);
    });

    Route::post('/save-image-or-text', [ConfigurationController::class, 'saveImageOrText']);
    Route::put('/delete-image-or-text/{file_type_id}', [ConfigurationController::class, 'deleteImageOrText']);

    Route::get('/me', [UserController::class, 'me']);
});

Route::get('/configuration', [ConfigurationController::class, 'index']);

Route::group(['prefix' => '/messages'], function () {
    Route::get('/{chatId}', [MessagesController::class, 'index']);
    Route::post('/', [MessagesController::class, 'store']);
});

Route::group(['prefix' => '/online-funeral'], function () {
    Route::get('/{id}', [OnlineFuneralController::class, 'show']);
    Route::post('/enter-in-room', [OnlineFuneralController::class, 'enterInRoom']);
});

Route::group(['prefix' => '/plans'], function () {
    Route::get('/', [PlanController::class, 'index']);
    Route::post('/', [PlanController::class, 'store']);
    Route::put('/{id}', [PlanController::class, 'update']);
});

Route::group(['prefix' => '/benefits'], function () {
    Route::get('/{id}', [BenefitController::class, 'index']);
    Route::post('/', [BenefitController::class, 'store']);
    Route::put('/{id}', [BenefitController::class, 'update']);
    Route::delete('/{id}', [BenefitController::class, 'delete']);
});

Route::post('/login', [AuthController::class, 'login']);
