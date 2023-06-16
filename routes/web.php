<?php

use App\Http\Controllers\Admin\PermisssionController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\SearchController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// welcome page
Route::get('/', function () {
    return view('welcome');
});
Route::get('/search', [SearchController::class, 'search'])->name('search');



Auth::routes();
// auth
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// admin
Route::middleware(['auth', 'role:admin'])->name('admin')->prefix('admin')->group(function () {
    // Route::get('/admin', [App\Http\Controllers\HomeController::class, 'admin'])->name('index');
    // Route::resource('/roles', RoleController::class);
    // Route::resource('/permisssions', PermisssionController::class);
});

Route::get('/writer', [App\Http\Controllers\HomeController::class, 'writer'])->middleware('auth', 'role:writer')->name('writer.index');
Route::get('/user', [App\Http\Controllers\HomeController::class, 'user'])->middleware('auth', 'role:user')->name('user.index');



// test
Route::resource('/roles', RoleController::class);
Route::resource('/permissions', PermisssionController::class);
