<?php

use App\Http\Controllers\ChamadoController;
use App\Http\Controllers\FormularioController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ListagemController;
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


Route::get('/', [ListagemController::class, 'index'])->middleware(['auth', 'verified'])->name('chamados.listagem');
Route::get('/chamados', [ChamadoController::class, 'index'])->middleware(['auth', 'verified'])->name('chamados.index');
Route::get('/chamado/{numrat}', [ChamadoController::class, 'index'])->middleware(['auth', 'verified'])->name('chamados.chamado');
Route::get('/dashboard', [HomeController::class, 'index'])->middleware(['auth', 'verified'])->name('chamados.dashboard');
Route::get('/chamados/novo', [FormularioController::class, 'index'])->middleware(['auth', 'verified'])->name('chamados.novo');
Route::post('/chamados/novo', [FormularioController::class, 'store'])->middleware(['auth', 'verified'])->name('chamados.store');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::post('/profile', [ProfileController::class, 'toggle'])->name('alterarTema');
});

require __DIR__.'/auth.php';
