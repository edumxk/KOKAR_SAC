<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SetorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('setores')->insert(
            [
                [
                    'codsetor' => '1',
                    'setor' => 'Administrador',
                    'status' => '1'
                ],
                [
                    'codsetor' => '2',
                    'setor' => 'Comercial',
                    'status' => '1'
                ],
                [
                    'codsetor' => '3',
                    'setor' => 'Financeiro',
                    'status' => '1'
                ],
                [
                    'codsetor' => '4',
                    'setor' => 'Fiscal',
                    'status' => '1'
                ],
                [
                    'codsetor' => '5',
                    'setor' => 'Expedição',
                    'status' => '1'
                ],
                [
                    'codsetor' => '6',
                    'setor' => 'Compras',
                    'status' => '1'
                ],
                [
                    'codsetor' => '7',
                    'setor' => 'PCP',
                    'status' => '1'
                ]
            ]
        );
    }
}
