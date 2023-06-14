<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CargosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('cargos')->insert(
            [
                [
                    'cargo' => 'Administrador',
                    'is_ativo' => true
                ],
                [
                    'cargo' => 'Diretor',
                    'is_ativo' => true
                ],
                [
                    'cargo' => 'Gerente',
                    'is_ativo' => true
                ],
                [
                    'cargo' => 'Analista',
                    'is_ativo' => true
                ],
                [
                    'cargo' => 'Assistente',
                    'is_ativo' => true
                ],
                [
                    'cargo' => 'Técnico',
                    'is_ativo' => true
                ],
                [
                    'cargo' => 'Auxiliar',
                    'is_ativo' => true
                ],
                [
                    'cargo' => 'Estagiário',
                    'is_ativo' => true
                ],
            ]);
    }
}
