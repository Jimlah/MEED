<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\User\RequestController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\User\DashboardController;
use App\Http\Controllers\User\RequestTypeController;

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
});

Route::middleware('notLoggedIn')->group(function () {
  Route::get('/login', [LoginController::class, 'index'])->name('showlogin');
  Route::post('/login', [LoginController::class, 'login'])->name('login');


  Route::get('/register', [RegisterController::class, 'index'])->name('showregister');
  Route::post('/register', [RegisterController::class, 'register'])->name('register');

  Route::get('/recover-password', [RegisterController::class, 'showRecoverPassword'])->name('showRecoverPassword');
  Route::post('/recover-password',  [RegisterController::class, 'recoverPasswordWithEmail'])->name('recoverPasswordWithEmail');
  Route::get('/recover-password/{token}', [RegisterController::class, 'recoverPassword'])->name('recoverPassword');
});


Route::middleware('loggedIn')->group(function () {
  Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
  Route::resource('/dashboards', DashboardController::class)->only('index');
  Route::resource('/requests', RequestController::class)->except('destroy');
  Route::resource('users', UserController::class)->except('destroy')->middleware('admin');
  Route::resource('request-types', RequestTypeController::class)->except(['show', 'destroy'])->middleware('superadmin');
});
