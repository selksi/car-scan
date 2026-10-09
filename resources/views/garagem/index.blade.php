@extends('layout-app')

@section('conteudo')
    <div class="mb-4">
        <div>
            <h2 class="fw-bold mb-1">Meus veículos</h2>
            <p class="text-muted mb-0">Consulte os veículos cadastrados na sua garagem.</p>
        </div>
    </div>

    @forelse ($carros as $carro)
        <div class="card shadow-sm mb-3">
            <div class="card-body">
                <div class="d-flex flex-wrap align-items-start justify-content-between gap-3">
                    <div>
                        <h5 class="card-title mb-1">
                            {{ $carro->marca }} {{ $carro->modelo }}
                        </h5>
                        <p class="text-muted mb-0">
                            Placa: {{ $carro->placa }} · Ano: {{ $carro->ano }}
                        </p>
                    </div>
                    <span class="badge text-bg-light border">
                        {{ number_format($carro->km_atual, 0, ',', '.') }} km
                    </span>
                </div>
            </div>
        </div>
    @empty
        <div class="card shadow-sm">
            <div class="card-body text-center py-5">
                <h5 class="card-title">Nenhum veículo cadastrado</h5>
                <p class="text-muted mb-0">Adicione seu primeiro veículo para começar.</p>
            </div>
        </div>
    @endforelse
@endsection
