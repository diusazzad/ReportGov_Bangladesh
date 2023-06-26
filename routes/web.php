<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {


    return view('welcome');
    // return view('admin.home');
});

Route::get('/login', [UserController::class, 'showLoginForm'])->name('login');
Route::post('/login', [UserController::class, 'login'])->name('login.submit');
Route::get('/register', [UserController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [UserController::class, 'register'])->name('register.submit');

// user dashboard
Route::get('/user/dashboard', [UserController::class, 'userDashboard'])->name('auth.user.dashboard');
// Admin Dashboard
Route::get('/admin/dashboard', [UserController::class, 'adminDashboard'])->name('auth.admin.dashboard');


Route::post('/logout', [UserController::class, 'logout'])->name('auth.logout');



// fallback routes
Route::fallback(function () {
    return view('error');
});
