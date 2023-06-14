<?php

use App\Http\Controllers\ChamadoControlller;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;

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

Route::get('/old', function () {
    return view('chamados.dashboard');
});

Route::get('/admin/{post}', [IndexController::class, 'show']);

Route::get('/', [HomeController::class, 'index'])->name('chamados.dashboard');
Route::get('/dashboard', [HomeController::class, 'index'])->name('chamados.dashboard');

Route::get('/chamado/{numrat}', [ChamadoControlller::class, 'index'])->name('chamados.chamado');

Route::POST('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/logout', function () {
    return view('auth.logout');
})->name('logout');

Route::post('/registro', function () {
    return view('auth.register');
})->name('register');

Route::get('/resetar-senha', function () {
    return view('auth.passwords.reset');
})->name('password.update');

Route::get('/email', function () {
    return view('auth.passwords.email');
})->name('password.email');

Route::get('/confirmar', function () {
    return view('auth.passwords.confirm');
})->name('password.confirm');
