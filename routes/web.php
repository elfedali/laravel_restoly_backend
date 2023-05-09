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

//Route::get('/users', [App\Http\Controllers\Web\UsersController::class, 'index'])->name('web.users');
//Route::get('/users/{user}', [App\Http\Controllers\Web\UsersController::class, 'show'])->name('web.users.show');

Route::prefix('user')->group(function () {
    Route::get('/', [App\Http\Controllers\Admin\UserController::class, 'index'])->name('web.user.index');
    Route::get('/create', [App\Http\Controllers\Admin\UserController::class, 'create'])->name('web.user.create');
    Route::post('/', [App\Http\Controllers\Admin\UserController::class, 'store'])->name('web.user.store');
    Route::get('/{user}', [App\Http\Controllers\Admin\UserController::class, 'show'])->name('web.user.show');
    Route::get('/{user}/edit', [App\Http\Controllers\Admin\UserController::class, 'edit'])->name('web.user.edit');
    Route::put('/{user}', [App\Http\Controllers\Admin\UserController::class, 'update'])->name('web.user.update');
    Route::delete('/{user}', [App\Http\Controllers\Admin\UserController::class, 'destroy'])->name('web.user.destroy');

    Route::get('/{user}/edit_password', [App\Http\Controllers\Admin\UserController::class, 'edit_password'])->name('web.user.edit_password');
    Route::put('/{user}/change_password', [App\Http\Controllers\Admin\UserController::class, 'change_password'])->name('web.user.change_password');
    // role
    Route::get('/{user}/edit_role', [App\Http\Controllers\Admin\UserController::class, 'edit_role'])->name('web.user.edit_role');
    Route::put('/{user}/change_role', [App\Http\Controllers\Admin\UserController::class, 'change_role'])->name('web.user.change_role');
    // profile
    Route::put('/{user}/update_profile', [App\Http\Controllers\Admin\ProfileController::class, 'update'])->name('web.profile.update');
});

Route::prefix('page')->group(function () {
    Route::get('/', [App\Http\Controllers\Admin\PageController::class, 'index'])->name('web.page.index');
    Route::get('/create', [App\Http\Controllers\Admin\PageController::class, 'create'])->name('web.page.create');
    Route::post('/', [App\Http\Controllers\Admin\PageController::class, 'store'])->name('web.page.store');
    Route::get('/{page}', [App\Http\Controllers\Admin\PageController::class, 'show'])->name('web.page.show');
    Route::get('/{page}/edit', [App\Http\Controllers\Admin\PageController::class, 'edit'])->name('web.page.edit');
    Route::put('/{page}', [App\Http\Controllers\Admin\PageController::class, 'update'])->name('web.page.update');
    Route::delete('/{page}', [App\Http\Controllers\Admin\PageController::class, 'destroy'])->name('web.page.destroy');
});

// Route::prefix('country')->group(function () {
//     Route::get('/', [App\Http\Controllers\Admin\CountryController::class, 'index'])->name('web.country.index');
//     Route::get('/create', [App\Http\Controllers\Admin\CountryController::class, 'create'])->name('web.country.create');
//     Route::post('/', [App\Http\Controllers\Admin\CountryController::class, 'store'])->name('web.country.store');
//     Route::get('/{country}', [App\Http\Controllers\Admin\CountryController::class, 'show'])->name('web.country.show');
//     Route::get('/{country}/edit', [App\Http\Controllers\Admin\CountryController::class, 'edit'])->name('web.country.edit');
//     Route::put('/{country}', [App\Http\Controllers\Admin\CountryController::class, 'update'])->name('web.country.update');
//     Route::delete('/{country}', [App\Http\Controllers\Admin\CountryController::class, 'destroy'])->name('web.country.destroy');
// });

// Route::prefix('/city')->group(function () {
//     Route::get('/', [App\Http\Controllers\Admin\CityController::class, 'index'])->name('web.city.index');
//     Route::get('/create', [App\Http\Controllers\Admin\CityController::class, 'create'])->name('web.city.create');
//     Route::post('/', [App\Http\Controllers\Admin\CityController::class, 'store'])->name('web.city.store');
//     Route::get('/{city}', [App\Http\Controllers\Admin\CityController::class, 'show'])->name('web.city.show');
//     Route::get('/{city}/edit', [App\Http\Controllers\Admin\CityController::class, 'edit'])->name('web.city.edit');
//     Route::put('/{city}', [App\Http\Controllers\Admin\CityController::class, 'update'])->name('web.city.update');
//     Route::delete('/{city}', [App\Http\Controllers\Admin\CityController::class, 'destroy'])->name('web.city.destroy');
// });
