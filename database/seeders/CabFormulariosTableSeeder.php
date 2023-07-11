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
        DB::table('cabformularios')->insert(
            [
                ['descricao' => 'PATOLOGIA'],
                ['descricao' => 'TIPO DE CLIENTE'],
                ['descricao' => 'TIPO DE SUPERFÍCIE'],
                ['descricao' => 'QUANTOS DIAS DE CURA'],
                ['descricao' => 'SOLVENTE UTILIZADO'],
                ['descricao' => 'DILUIÇÃO'],
                ['descricao' => 'A EMBALAGEM ESTAVA LACRADA?'],
                ['descricao' => 'O PRODUTO FOI HOMOGENEIZADO POR COMPLETO?'],
                ['descricao' => 'CONDIÇÕES DA SUPERFÍCIE'],
                ['descricao' => 'USO DE FUNDO'],
                ['descricao' => 'NÚMERO DE DEMÃOS'],
                ['descricao' => 'INTERVALO ENTRE DEMÃOS'],
                ['descricao' => 'FERRAMENTA UTILIZADA NA APLICAÇÃO']
            ]
        );
    }
}
