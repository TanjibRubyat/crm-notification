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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/follow-up', [\App\Http\Controllers\ReminderController::class, 'index']);
Route::post('/follow-up', [\App\Http\Controllers\ReminderController::class, 'store']);
Route::put('/follow-up-update/{id}', [\App\Http\Controllers\ReminderController::class, 'update']);
Route::post('/follow-up-by-user', [\App\Http\Controllers\ReminderController::class, 'show']);
Route::post('/follow-up-deactivate/{id}', [\App\Http\Controllers\ReminderController::class, 'destroy']);
Route::get('/follow', [\App\Http\Controllers\ReminderController::class, 'broadcast']);
Route::post('/user-details', [\App\Http\Controllers\ReminderController::class, 'get_user_details']);

Route::get('/notifications-list', [\App\Http\Controllers\ReminderController::class, 'notify_list']);