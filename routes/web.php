<?php

use App\Http\Controllers\ManutencaoController;
use App\Http\Controllers\VeiculoController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('dashboard', 'dashboard')->name('dashboard');
});

//ROTAS DE VEICULO
Route::get('/garagem', [VeiculoController::class, 'index']);

//ROTAS DE MANUTENÇÃO
Route::get('/manutencao/nova', [ManutencaoController::class, 'create']);
Route::get('/manutencao', [ManutencaoController::class, 'store']);

require __DIR__.'/settings.php';
