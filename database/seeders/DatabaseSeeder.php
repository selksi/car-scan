<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Veiculo;
use App\Models\Manutencao;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $user = User::factory()->create([
            'name' => 'Samuel',
            'email' => 'samuel@teste.com',
        ]);

        $logan = Veiculo::create([
            'user_id' => $user->id,
            'marca' => 'Renault',
            'modelo' => 'Logan 1.0',
            'ano' => 2014,
            'placa' => 'ABC1D23',
            'km_atual' => 120000,
        ]);

        $onix = Veiculo::create([
            'user_id' => $user->id,
            'marca' => 'Chevrolet',
            'modelo' => 'Onix 1.0',
            'ano' => 2021,
            'placa' => 'DEF4G56',
            'km_atual' => 48000,
        ]);

        Manutencao::create([
            'veiculo_id' => $logan->id,
            'servico' => 'Troca de óleo e filtro',
            'data' => now()->subMonths(5)->toDateString(),
            'data_limite' => now()->addDays(15)->toDateString(),
            'km_atual' => 120000,
            'km_prox' => 130000,
            'observacao' => 'Revisar também o nível dos fluidos.',
        ]);

        Manutencao::create([
            'veiculo_id' => $onix->id,
            'servico' => 'Alinhamento e balanceamento',
            'data' => now()->subMonths(2)->toDateString(),
            'data_limite' => now()->addDays(45)->toDateString(),
            'km_atual' => 48000,
            'km_prox' => 55000,
            'observacao' => 'Verificar o desgaste dos pneus.',
        ]);
    }
}
