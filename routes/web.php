<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\Auth;

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

Route::get('/sesi', [SessionController::class, 'index']);
Route::post('/sesi/login', [SessionController::class, 'login']);

Route::get('/', function () {
    return view('welcome');
});
Route::resource('Grooming', GroomingController::class);
Route::resource('Penitipan', PenitipanController::class);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
