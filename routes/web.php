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

Route::prefix('category')->group(function () {
    Route::get('/', [App\Http\Controllers\Admin\CategoryController::class, 'index'])->name('web.category.index');
    Route::get('/create', [App\Http\Controllers\Admin\CategoryController::class, 'create'])->name('web.category.create');
    Route::post('/', [App\Http\Controllers\Admin\CategoryController::class, 'store'])->name('web.category.store');
    Route::get('/{category}', [App\Http\Controllers\Admin\CategoryController::class, 'show'])->name('web.category.show');
    Route::get('/{category}/edit', [App\Http\Controllers\Admin\CategoryController::class, 'edit'])->name('web.category.edit');
    Route::put('/{category}', [App\Http\Controllers\Admin\CategoryController::class, 'update'])->name('web.category.update');
    Route::delete('/{category}', [App\Http\Controllers\Admin\CategoryController::class, 'destroy'])->name('web.category.destroy');
});

Route::prefix('business')->group(function () {
    Route::get('/', [App\Http\Controllers\Admin\BusinessController::class, 'index'])->name('web.business.index');
    Route::get('/create', [App\Http\Controllers\Admin\BusinessController::class, 'create'])->name('web.business.create');
    Route::post('/', [App\Http\Controllers\Admin\BusinessController::class, 'store'])->name('web.business.store');
    Route::get('/{business}', [App\Http\Controllers\Admin\BusinessController::class, 'show'])->name('web.business.show');
    Route::get('/{business}/edit', [App\Http\Controllers\Admin\BusinessController::class, 'edit'])->name('web.business.edit');
    Route::put('/{business}', [App\Http\Controllers\Admin\BusinessController::class, 'update'])->name('web.business.update');
    Route::delete('/{business}', [App\Http\Controllers\Admin\BusinessController::class, 'destroy'])->name('web.business.destroy');
});

Route::prefix('kitchen')->group(function () {
    Route::get('/', [App\Http\Controllers\Admin\kitchenController::class, 'index'])->name('web.kitchen.index');
    Route::get('/create', [App\Http\Controllers\Admin\kitchenController::class, 'create'])->name('web.kitchen.create');
    Route::post('/', [App\Http\Controllers\Admin\kitchenController::class, 'store'])->name('web.kitchen.store');
    Route::get('/{kitchen}', [App\Http\Controllers\Admin\kitchenController::class, 'show'])->name('web.kitchen.show');
    Route::get('/{kitchen}/edit', [App\Http\Controllers\Admin\kitchenController::class, 'edit'])->name('web.kitchen.edit');
    Route::put('/{kitchen}', [App\Http\Controllers\Admin\kitchenController::class, 'update'])->name('web.kitchen.update');
    Route::delete('/{kitchen}', [App\Http\Controllers\Admin\kitchenController::class, 'destroy'])->name('web.kitchen.destroy');
});

Route::prefix('service')->group(function () {
    Route::get('/', [App\Http\Controllers\Admin\ServiceController::class, 'index'])->name('web.service.index');
    Route::get('/create', [App\Http\Controllers\Admin\ServiceController::class, 'create'])->name('web.service.create');
    Route::post('/', [App\Http\Controllers\Admin\ServiceController::class, 'store'])->name('web.service.store');
    Route::get('/{service}', [App\Http\Controllers\Admin\ServiceController::class, 'show'])->name('web.service.show');
    Route::get('/{service}/edit', [App\Http\Controllers\Admin\ServiceController::class, 'edit'])->name('web.service.edit');
    Route::put('/{service}', [App\Http\Controllers\Admin\ServiceController::class, 'update'])->name('web.service.update');
    Route::delete('/{service}', [App\Http\Controllers\Admin\ServiceController::class, 'destroy'])->name('web.service.destroy');
});

Route::prefix('language')->group(function () {
    Route::get('/', [App\Http\Controllers\Admin\LanguageController::class, 'index'])->name('web.language.index');
    Route::get('/create', [App\Http\Controllers\Admin\LanguageController::class, 'create'])->name('web.language.create');
    Route::post('/', [App\Http\Controllers\Admin\LanguageController::class, 'store'])->name('web.language.store');
    Route::get('/{language}', [App\Http\Controllers\Admin\LanguageController::class, 'show'])->name('web.language.show');
    Route::get('/{language}/edit', [App\Http\Controllers\Admin\LanguageController::class, 'edit'])->name('web.language.edit');
    Route::put('/{language}', [App\Http\Controllers\Admin\LanguageController::class, 'update'])->name('web.language.update');
    Route::delete('/{language}', [App\Http\Controllers\Admin\LanguageController::class, 'destroy'])->name('web.language.destroy');
});
