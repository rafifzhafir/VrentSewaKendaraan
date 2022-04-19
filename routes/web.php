<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PesanController;

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
    return view('home',[
        "title" => "Home"
    ]);
});

Route::get('/features', function () {
    return view('features', [
        "title" => "Features"
    ]);
});

Route::get('/blog', function () {
    return view('posts');
});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', [dashboardController::class, 'index'])->middleware('auth');

Route::get('/dashboard/profil', [ProfilController::class, 'index'])->middleware('auth');

Route::get('/dashboard/catalog', [CatalogController::class, 'index'])->middleware('auth');

Route::get('/dashboard/catalog/pesan/{id}', [PesanController::class, 'index'])->middleware('auth');
Route::post('/dashboard/catalog/pesan/{id}', [PesanController::class, 'pesan']);

Route::get('/dashboard/order', [OrderController::class, 'index'])->middleware('auth');