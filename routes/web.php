<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/login', [loginController::class, 'login']);
Route::get('/registration', [loginController::class, 'regist']);
Route::post('/regist-user', [loginController::class, 'RegisterUser'])->name('regist-user');
Route::post('/login-user', [loginController::class, 'LoginUser'])->name('login-user');
Route::get('/dashboard', [loginController::class, 'dashboard']);//nanti ganti buat masuk kedalam homepage