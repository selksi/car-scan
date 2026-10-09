<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Manutencao extends Model
{
    protected $table = 'manutencoes';

    protected $fillable = [
        'veiculo_id',
        'servico',
        'data',
        'data_limite',
        'km_atual',
        'km_prox',
        'observacao',
    ];

    public function veiculo(): BelongsTo
    {
        return $this->belongsTo(Veiculo::class);
    }
}
