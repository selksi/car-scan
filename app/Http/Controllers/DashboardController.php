<?php

namespace App\Http\Controllers;

use App\Models\Manutencao;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index()
    {
        $usuario  = auth()->user();

        $totalCarros = $usuario->veiculos()->count();

        $meusCarrosIDs = $usuario->veiculos()->pluck('id');

        $manutencoesProximas = Manutencao::whereIn('veiculo_id', $meusCarrosIDs)
            ->whereNotNull('data_limite')
            ->where('data_limite', '<=', Carbon::now()->addDays(30))
            ->orderBy('data_limite', 'asc')
            ->get();

        return view('dashboard.index', [
            'totalCarros' => $totalCarros,
            'manutencoesProximas' => $manutencoesProximas,
            'nomeUsuario' => $usuario->name
        ]);
    }

}
