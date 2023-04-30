<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// users is the user management page
Route::get('/users', [App\Http\Controllers\Web\UsersController::class, 'index'])->name('web.users');
// users/{user} is the user profile page
Route::get('/users/{user}', [App\Http\Controllers\Web\UsersController::class, 'show'])->name('web.users.show');
