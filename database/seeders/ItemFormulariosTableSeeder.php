<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemFormulariosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('itemformularios')->insert(
            [
                ['idopcao' => 0, 'descricao' => 'Escolher', 'idformulario' => 1]
                ,['idopcao' => 0, 'descricao' => 'Escolher', 'idformulario' => 2]
                ,['idopcao' => 1, 'descricao' => 'Revenda - Lojista', 'idformulario' => 2]
                ,['idopcao' => 2, 'descricao' => 'Cliente Final', 'idformulario' => 2]
                ,['idopcao' => 3, 'descricao' => 'Pintor', 'idformulario' => 2]
                ,['idopcao' => 4, 'descricao' => 'Construtora', 'idformulario' => 2]
                ,['idopcao' => 5, 'descricao' => 'Outro', 'idformulario' => 2]
                ,['idopcao' => 0, 'descricao' => 'Selecione', 'idformulario' => 3]
                ,['idopcao' => 1, 'descricao' => 'Reboco', 'idformulario' => 3]
                ,['idopcao' => 2, 'descricao' => 'Massa Acrílica', 'idformulario' => 3]
                ,['idopcao' => 3, 'descricao' => 'Massa PVA', 'idformulario' => 3]
                ,['idopcao' => 4, 'descricao' => 'Repintura', 'idformulario' => 3]
                ,['idopcao' => 5, 'descricao' => 'Outro', 'idformulario' => 3]
                ,['idopcao' => 1, 'descricao' => 'Menos de 30 Dias', 'idformulario' => 4]
                ,['idopcao' => 2, 'descricao' => 'Mais de 30 Dias', 'idformulario' => 4]
                ,['idopcao' => 0, 'descricao' => 'Escolher', 'idformulario' => 5]
                ,['idopcao' => 1, 'descricao' => 'Água', 'idformulario' => 5]
                ,['idopcao' => 2, 'descricao' => 'Aguarrás', 'idformulario' => 5]
                ,['idopcao' => 3, 'descricao' => 'Thinner', 'idformulario' => 5]
                ,['idopcao' => 0, 'descricao' => 'Escolher', 'idformulario' => 6]
                ,['idopcao' => 1, 'descricao' => 'Não Diluiu', 'idformulario' => 6]
                ,['idopcao' => 2, 'descricao' => '1% a 10%', 'idformulario' => 6]
                ,['idopcao' => 3, 'descricao' => '11% a 20%', 'idformulario' => 6]
                ,['idopcao' => 4, 'descricao' => '21% a 30%', 'idformulario' => 6]
                ,['idopcao' => 5, 'descricao' => '31% a 40%', 'idformulario' => 6]
                ,['idopcao' => 6, 'descricao' => 'mais de 41%', 'idformulario' => 6]
                ,['idopcao' => 0, 'descricao' => 'Escolher', 'idformulario' => 7]
                ,['idopcao' => 1, 'descricao' => 'Sim', 'idformulario' => 7]
                ,['idopcao' => 2, 'descricao' => 'Não', 'idformulario' => 7]
                ,['idopcao' => 0, 'descricao' => 'Escolher', 'idformulario' => 8]
                ,['idopcao' => 1, 'descricao' => 'Sim', 'idformulario' => 8]
                ,['idopcao' => 2, 'descricao' => 'Não', 'idformulario' => 8]
                ,['idopcao' => 0, 'descricao' => 'Escolher', 'idformulario' => 9]
                ,['idopcao' => 1, 'descricao' => 'Calcinada', 'idformulario' => 9]
                ,['idopcao' => 2, 'descricao' => 'Com Fungos', 'idformulario' => 9]
                ,['idopcao' => 3, 'descricao' => 'Com Gordura', 'idformulario' => 9]
                ,['idopcao' => 4, 'descricao' => 'Com Ferrugem', 'idformulario' => 9]
                ,['idopcao' => 5, 'descricao' => 'Sinais de Infiltração', 'idformulario' => 9]
                ,['idopcao' => 6, 'descricao' => 'Reboco Fraco (Arenoso)', 'idformulario' => 9]
                ,['idopcao' => 7, 'descricao' => 'Em boas Condições de Aplicação	', 'idformulario' => 9]
                ,['idopcao' => 0, 'descricao' => 'Escolher', 'idformulario' => 10]
                ,['idopcao' => 1, 'descricao' => 'Fundo Preparador', 'idformulario' => 10]
                ,['idopcao' => 2, 'descricao' => 'Selador Acrílico', 'idformulario' => 10]
                ,['idopcao' => 3, 'descricao' => 'Repintura', 'idformulario' => 10]
                ,['idopcao' => 4, 'descricao' => 'Seladora para Madeira', 'idformulario' => 10]
                ,['idopcao' => 5, 'descricao' => 'Fundo Serralheiro/Primer', 'idformulario' => 10]
                ,['idopcao' => 6, 'descricao' => 'Fundo Galvanizado', 'idformulario' => 10]
                ,['idopcao' => 7, 'descricao' => 'Tinta Premium (Lume)', 'idformulario' => 10]
                ,['idopcao' => 8, 'descricao' => 'Direto na Massa PVA/Acrílica', 'idformulario' => 10]
                ,['idopcao' => 9, 'descricao' => 'Direto na Chapa', 'idformulario' => 10]
                ,['idopcao' => 0, 'descricao' => 'Escolher', 'idformulario' => 11]
                ,['idopcao' => 1, 'descricao' => '1', 'idformulario' => 11]
                ,['idopcao' => 2, 'descricao' => '2', 'idformulario' => 11]
                ,['idopcao' => 3, 'descricao' => '3', 'idformulario' => 11]
                ,['idopcao' => 4, 'descricao' => '4', 'idformulario' => 11]
                ,['idopcao' => 5, 'descricao' => '5', 'idformulario' => 11]
                ,['idopcao' => 6, 'descricao' => '6', 'idformulario' => 11]
                ,['idopcao' => 7, 'descricao' => '7', 'idformulario' => 11]
                ,['idopcao' => 8, 'descricao' => '8', 'idformulario' => 11]
                ,['idopcao' => 9, 'descricao' => '9', 'idformulario' => 11]
                ,['idopcao' => 0, 'descricao' => 'Escolher', 'idformulario' => 12]
                ,['idopcao' => 1, 'descricao' => 'Menos de 1:00 hr', 'idformulario' => 12]
                ,['idopcao' => 2, 'descricao' => 'De 1:00 a 2:00 hr', 'idformulario' => 12]
                ,['idopcao' => 3, 'descricao' => 'De 2:00 a 3:00 hr', 'idformulario' => 12]
                ,['idopcao' => 4, 'descricao' => 'De 3:00 a 4:00 hr', 'idformulario' => 12]
                ,['idopcao' => 5, 'descricao' => 'De 4:00 a 5:00 hr', 'idformulario' => 12]
                ,['idopcao' => 6, 'descricao' => 'De 5:00 a 6:00 hr', 'idformulario' => 12]
                ,['idopcao' => 7, 'descricao' => 'Mais de 6:00 hr', 'idformulario' => 12]
                ,['idopcao' => 0, 'descricao' => 'Escolher', 'idformulario' => 13]
                ,['idopcao' => 1, 'descricao' => 'Rolo Pelo Baixo(Anti-Respingo)', 'idformulario' => 13]
                ,['idopcao' => 2, 'descricao' => 'Rolo Pelo Alto', 'idformulario' => 13]
                ,['idopcao' => 3, 'descricao' => 'Rolo de Espuma', 'idformulario' => 13]
                ,['idopcao' => 4, 'descricao' => 'Rolo de Epoxi', 'idformulario' => 13]
                ,['idopcao' => 5, 'descricao' => 'Pincel para Base Água', 'idformulario' => 13]
                ,['idopcao' => 6, 'descricao' => 'Pincel para Base Solvente', 'idformulario' => 13]
                ,['idopcao' => 7, 'descricao' => 'Pistola de Ar Direto', 'idformulario' => 13]
                ,['idopcao' => 8, 'descricao' => 'Pistola de Compressor', 'idformulario' => 13]
                ,['idopcao' => 9, 'descricao' => 'Desempenadeira de Aço Inox', 'idformulario' => 13]
                ,['idopcao' => 10, 'descricao' => 'Desempenadeira de Aço Carbono', 'idformulario' => 13]
                ,['idopcao' => 11, 'descricao' => 'Desempenadeira de PVC', 'idformulario' => 13]
                ,['idopcao' => 12, 'descricao' => 'Rolo Cabelo de Anjo (Textura)', 'idformulario' => 13]
                ,['idopcao' => 13, 'descricao' => 'Rolo de Espuma (Efeito Textura Baixa)', 'idformulario' => 13]
                ,['idopcao' => 0, 'descricao' => 'Escolher	', 'idformulario' => 4]
            ]
        );
    }
}
