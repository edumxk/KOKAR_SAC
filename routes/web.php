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
