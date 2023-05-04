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
Route::get('/home', function () {
    return redirect()->route('home');
});

Route::get('/users', [App\Http\Controllers\Web\UsersController::class, 'index'])->name('web.users');
Route::get('/users/{user}', [App\Http\Controllers\Web\UsersController::class, 'show'])->name('web.users.show');

Route::prefix('country')->group(function () {
    Route::get('/', [App\Http\Controllers\Admin\CountryController::class, 'index'])->name('web.country.index');
    Route::get('/create', [App\Http\Controllers\Admin\CountryController::class, 'create'])->name('web.country.create');
    Route::post('/', [App\Http\Controllers\Admin\CountryController::class, 'store'])->name('web.country.store');
    Route::get('/{country}', [App\Http\Controllers\Admin\CountryController::class, 'show'])->name('web.country.show');
    Route::get('/{country}/edit', [App\Http\Controllers\Admin\CountryController::class, 'edit'])->name('web.country.edit');
    Route::put('/{country}', [App\Http\Controllers\Admin\CountryController::class, 'update'])->name('web.country.update');
    Route::delete('/{country}', [App\Http\Controllers\Admin\CountryController::class, 'destroy'])->name('web.country.destroy');
});

Route::prefix('/city')->group(function () {
    Route::get('/', [App\Http\Controllers\Admin\CityController::class, 'index'])->name('web.city.index');
    Route::get('/create', [App\Http\Controllers\Admin\CityController::class, 'create'])->name('web.city.create');
    Route::post('/', [App\Http\Controllers\Admin\CityController::class, 'store'])->name('web.city.store');
    Route::get('/{city}', [App\Http\Controllers\Admin\CityController::class, 'show'])->name('web.city.show');
    Route::get('/{city}/edit', [App\Http\Controllers\Admin\CityController::class, 'edit'])->name('web.city.edit');
    Route::put('/{city}', [App\Http\Controllers\Admin\CityController::class, 'update'])->name('web.city.update');
    Route::delete('/{city}', [App\Http\Controllers\Admin\CityController::class, 'destroy'])->name('web.city.destroy');
});
