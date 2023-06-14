<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SetoresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('setores')->insert(
            [
                [
                    'setor' => 'Administrador',
                    'is_ativo' => true
                ],
                [
                    'setor' => 'Diretoria',
                    'is_ativo' => true
                ],
                [
                    'setor' => 'Financeiro',
                    'is_ativo' => true
                ],
                [
                    'setor' => 'Comercial',
                    'is_ativo' => true
                ],
                [
                    'setor' => 'PCP',
                    'is_ativo' => true
                ],
                [
                    'setor' => 'Almoxarifado',
                    'is_ativo' => true
                ],
                [
                    'setor' => 'Laboratório de Qualidade',
                    'is_ativo' => true
                ],
                [
                    'setor' => 'Laboratório de Desenvolvimento',
                    'is_ativo' => true
                ],
                [
                    'setor' => 'Produção',
                    'is_ativo' => true
                ],
                [
                    'setor' => 'Expedição',
                    'is_ativo' => true
                ],
            ]
        );
    }
}
