<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CabFormulariosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('cab_formularios')->insert(
            [
                ['descricao' => 'PATOLOGIA', 'tipo' => 'select'],
                ['descricao' => 'TIPO DE CLIENTE', 'tipo' => 'select'],
                ['descricao' => 'TIPO DE SUPERFÍCIE', 'tipo' => 'select'],
                ['descricao' => 'QUANTOS DIAS DE CURA', 'tipo' => 'select'],
                ['descricao' => 'SOLVENTE UTILIZADO', 'tipo' => 'select'],
                ['descricao' => 'DILUIÇÃO', 'tipo' => 'select'],
                ['descricao' => 'A EMBALAGEM ESTAVA LACRADA?', 'tipo' => 'select'],
                ['descricao' => 'O PRODUTO FOI HOMOGENEIZADO POR COMPLETO?', 'tipo' => 'select'],
                ['descricao' => 'CONDIÇÕES DA SUPERFÍCIE', 'tipo' => 'select'],
                ['descricao' => 'USO DE FUNDO', 'tipo' => 'select'],
                ['descricao' => 'NÚMERO DE DEMÃOS', 'tipo' => 'select'],
                ['descricao' => 'INTERVALO ENTRE DEMÃOS', 'tipo' => 'select'],
                ['descricao' => 'FERRAMENTA UTILIZADA NA APLICAÇÃO', 'tipo' => 'select']
            ]
        );
    }
}
