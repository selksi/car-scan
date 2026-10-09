@extends('layout-app')

@section('conteudo')
    <div class="row mb-4">
        <div class="col-12">
            <h2 class="fw-bold">Painel Geral</h2>
            <p class="text-muted">Bem-vindo ao controle da sua garagem.</p>
        </div>
    </div>

    <!-- Cartões de Estatísticas -->
    <div class="row">
        <div class="col-md-4">
            <div class="card text-white bg-primary shadow-sm mb-3">
                <div class="card-body">
                    <h5 class="card-title">Veículos Registados</h5>
                    <!-- Variável enviada pelo DashboardController -->
                    <p class="card-text display-6 fw-bold">{{ $totalCarros }}</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Secção de Alertas Próximos -->
    <div class="row mt-4">
        <div class="col-12">
            <div class="card shadow-sm">
                <div class="card-header bg-white fw-bold">
                    ⚠️ Manutenções Próximas do Vencimento
                </div>
                <div class="card-body">
                    <p class="text-muted">Ainda não existem alertas urgentes para os próximos 30 dias.</p>
                </div>
            </div>
        </div>
    </div>
@endsection
