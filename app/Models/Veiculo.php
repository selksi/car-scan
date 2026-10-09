<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Veiculo extends Model
{
    protected $fillable = [
        'user_id',
        'placa',
        'marca',
        'modelo',
        'ano',
        'km_atual',
    ];

    public function user(): HasOne
    {
        return $this->hasOne(User::class);
    }
    public function manutencoes(): HasMany
    {
        return $this->hasMany(Manutencao::class);
    }
}
