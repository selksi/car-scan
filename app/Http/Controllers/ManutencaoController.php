<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManutencaoController extends Controller
{
    public function create()
    {
        $usuario = auth()->user();
        $carros = $usuario->veiculos();

        return view('manutencao.create', ['carros' => $carros]);
    }

    public function store(Request $request)
    {
        $dadosValidados = $request->validate([
            'veiculo_id' => 'required',
            'servico' => 'required',
            'km_atual' => 'required|integer',
            'km_prox' => 'nullable|integer',
            'data_limite' => 'nullable|date'
        ]);

        Manutencao::create($dadosValidados);

        $carro = Veiculo::find($request->veiculo_id);

        if($request->km_atual > $carro->km_prox){
            $carro->km_atual = $request->km_atual;
            $carro->save();
        }

        return redirect('/garagem')->with('sucesso', 'Reistro de manutenção adicionado com sucesso!');
    }
}
