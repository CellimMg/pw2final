<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Fornecedor;

class FornecedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Fornecedor::create([
            'nome' => 'Fornecedor 01',
            'cnpj' => '32.207.879/0001-45'
        ]);
        Fornecedor::create([
            'nome' => 'Fornecedor 02',
            'cnpj' => '57.227.719/0001-49'
        ]);
        Fornecedor::create([
            'nome' => 'Fornecedor 03',
            'cnpj' => '65.207.888/0001-29'
        ]);
    }
}
