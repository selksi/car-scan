<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ManutencaoController;
use App\Http\Controllers\VeiculoController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
});

// ROTAS DE VEICULO
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/garagem', [VeiculoController::class, 'index'])->name('garagem');

    // ROTAS DE MANUTENÇÃO
    Route::get('/manutencao/nova', [ManutencaoController::class, 'create']);
    Route::post('/manutencao', [ManutencaoController::class, 'store']);
});


require __DIR__.'/settings.php';
