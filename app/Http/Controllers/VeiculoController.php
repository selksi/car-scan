<?php

namespace App\Http\Controllers;

class VeiculoController extends Controller
{
    public function index()
    {
        $usuario = auth()->user();
        $meusCarros = $usuario->veiculos();

        return view('garagem.index', ['carros' => $meusCarros]);
    }
}
