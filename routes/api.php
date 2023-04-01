<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::post('/login', [\App\Http\Controllers\Auth\LoginController::class, 'login']);
Route::post('/register', [\App\Http\Controllers\Auth\RegisterController::class, 'register']);

Route::middleware('auth:sanctum')->group(function () {
    Route::apiResource('pages', \App\Http\Controllers\PageController::class, ['except' => ['index', 'show']]);
    Route::apiResource('categories', \App\Http\Controllers\CategoryController::class, ['except' => ['index', 'show']]);
});
Route::get('/pages', [\App\Http\Controllers\PageController::class, 'index']);
Route::get('/pages/{page}', [\App\Http\Controllers\PageController::class, 'show']);

Route::get('/categories', [\App\Http\Controllers\CategoryController::class, 'index']);
Route::get('/categories/{category}', [\App\Http\Controllers\CategoryController::class, 'show']);

Route::apiResource('b', \App\Http\Controllers\BusinessController::class, ['except' => ['index', 'show']]); // TODO: add auth middleware.
Route::get('/b', [\App\Http\Controllers\BusinessController::class, 'index']);
Route::get('/b/{business}', [\App\Http\Controllers\BusinessController::class, 'show']);
