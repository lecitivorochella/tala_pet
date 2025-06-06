<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Login\LoginController;
use App\Http\Controllers\Admin\Breed\BreedController;
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

// Route::get('/', function () {
//     return view('welcome');\
// });
Route::get('/',[App\Http\Controllers\Admin\PetuiController::class, 'index'])->name('petui');
Route::get('/login', [App\Http\Controllers\Admin\Login\LoginController::class, 'index'])->name('login');
Route::post('/register', [App\Http\Controllers\Ajax\Admin\Login\LoginController::class, 'register'])->name('register');
Route::post('/logout', [App\Http\Controllers\Ajax\Admin\Login\LoginController::class, 'logout'])->name('logout');
Route::post('/log', [App\Http\Controllers\Ajax\Admin\Login\LoginController::class, 'login'])->name('login.auth');
Route::get('/breed', [App\Http\Controllers\Admin\Breed\BreedController:: class, 'index'])->name('breed');
Route:: post('/add-breed', [App\Http\Controllers\Ajax\Admin\BreedController::class, 'create'])->name('breed.add');