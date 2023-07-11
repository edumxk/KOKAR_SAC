<?php

use App\Http\Controllers\ChamadoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
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
//Route::get('/', [HomeController::class, 'index'])->name('dashboard');
//Route::get('/dashboard', [HomeController::class, 'index'])->name('chamados.dashboard');

Route::get('/', [HomeController::class, 'teste'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/chamado/{numrat}', [ChamadoController::class, 'index'])->middleware(['auth', 'verified'])->name('chamados.chamado');
Route::get('/dashboard', [HomeController::class, 'index'])->middleware(['auth', 'verified'])->name('chamados.dashboard');
Route::get('/chamados/novo', [ChamadoController::class, 'create'])->middleware(['auth', 'verified'])->name('chamados.novo');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::post('/profile', [ProfileController::class, 'toggle'])->name('alterarTema');
});

require __DIR__.'/auth.php';
