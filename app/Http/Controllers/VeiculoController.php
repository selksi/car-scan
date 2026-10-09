<?php

namespace App\Http\Controllers;

class VeiculoController extends Controller
{
    public function index()
    {
        $usuario = auth()->user();
        $meusCarros = $usuario->veiculos()->orderBy('marca')->orderBy('modelo')->get();

        return view('garagem.index', ['carros' => $meusCarros]);
    }
}
