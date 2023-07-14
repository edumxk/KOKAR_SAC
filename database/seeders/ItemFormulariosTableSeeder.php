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
        DB::table('item_formularios')->insert(
            [
                ['idopcao' => 0, 'descricaoitem' => 'Selecione A Opção', 'idformulario' => 1]
                ,['idopcao' => 0, 'descricaoitem' => 'Selecione A Opção', 'idformulario' => 2]
                ,['idopcao' => 1, 'descricaoitem' => 'Revenda - Lojista', 'idformulario' => 2]
                ,['idopcao' => 2, 'descricaoitem' => 'Cliente Final', 'idformulario' => 2]
                ,['idopcao' => 3, 'descricaoitem' => 'Pintor', 'idformulario' => 2]
                ,['idopcao' => 4, 'descricaoitem' => 'Construtora', 'idformulario' => 2]
                ,['idopcao' => 5, 'descricaoitem' => 'Outro', 'idformulario' => 2]
                ,['idopcao' => 0, 'descricaoitem' => 'Selecione', 'idformulario' => 3]
                ,['idopcao' => 1, 'descricaoitem' => 'Reboco', 'idformulario' => 3]
                ,['idopcao' => 2, 'descricaoitem' => 'Massa Acrílica', 'idformulario' => 3]
                ,['idopcao' => 3, 'descricaoitem' => 'Massa PVA', 'idformulario' => 3]
                ,['idopcao' => 4, 'descricaoitem' => 'Repintura', 'idformulario' => 3]
                ,['idopcao' => 5, 'descricaoitem' => 'Outro', 'idformulario' => 3]
                ,['idopcao' => 1, 'descricaoitem' => 'Menos de 30 Dias', 'idformulario' => 4]
                ,['idopcao' => 2, 'descricaoitem' => 'Mais de 30 Dias', 'idformulario' => 4]
                ,['idopcao' => 0, 'descricaoitem' => 'Selecione A Opção', 'idformulario' => 5]
                ,['idopcao' => 1, 'descricaoitem' => 'Água', 'idformulario' => 5]
                ,['idopcao' => 2, 'descricaoitem' => 'Aguarrás', 'idformulario' => 5]
                ,['idopcao' => 3, 'descricaoitem' => 'Thinner', 'idformulario' => 5]
                ,['idopcao' => 0, 'descricaoitem' => 'Selecione A Opção', 'idformulario' => 6]
                ,['idopcao' => 1, 'descricaoitem' => 'Não Diluiu', 'idformulario' => 6]
                ,['idopcao' => 2, 'descricaoitem' => '1% a 10%', 'idformulario' => 6]
                ,['idopcao' => 3, 'descricaoitem' => '11% a 20%', 'idformulario' => 6]
                ,['idopcao' => 4, 'descricaoitem' => '21% a 30%', 'idformulario' => 6]
                ,['idopcao' => 5, 'descricaoitem' => '31% a 40%', 'idformulario' => 6]
                ,['idopcao' => 6, 'descricaoitem' => 'mais de 41%', 'idformulario' => 6]
                ,['idopcao' => 0, 'descricaoitem' => 'Selecione A Opção', 'idformulario' => 7]
                ,['idopcao' => 1, 'descricaoitem' => 'Sim', 'idformulario' => 7]
                ,['idopcao' => 2, 'descricaoitem' => 'Não', 'idformulario' => 7]
                ,['idopcao' => 0, 'descricaoitem' => 'Selecione A Opção', 'idformulario' => 8]
                ,['idopcao' => 1, 'descricaoitem' => 'Sim', 'idformulario' => 8]
                ,['idopcao' => 2, 'descricaoitem' => 'Não', 'idformulario' => 8]
                ,['idopcao' => 0, 'descricaoitem' => 'Selecione A Opção', 'idformulario' => 9]
                ,['idopcao' => 1, 'descricaoitem' => 'Calcinada', 'idformulario' => 9]
                ,['idopcao' => 2, 'descricaoitem' => 'Com Fungos', 'idformulario' => 9]
                ,['idopcao' => 3, 'descricaoitem' => 'Com Gordura', 'idformulario' => 9]
                ,['idopcao' => 4, 'descricaoitem' => 'Com Ferrugem', 'idformulario' => 9]
                ,['idopcao' => 5, 'descricaoitem' => 'Sinais de Infiltração', 'idformulario' => 9]
                ,['idopcao' => 6, 'descricaoitem' => 'Reboco Fraco (Arenoso)', 'idformulario' => 9]
                ,['idopcao' => 7, 'descricaoitem' => 'Em boas Condições de Aplicação	', 'idformulario' => 9]
                ,['idopcao' => 0, 'descricaoitem' => 'Selecione A Opção', 'idformulario' => 10]
                ,['idopcao' => 1, 'descricaoitem' => 'Fundo Preparador', 'idformulario' => 10]
                ,['idopcao' => 2, 'descricaoitem' => 'Selador Acrílico', 'idformulario' => 10]
                ,['idopcao' => 3, 'descricaoitem' => 'Repintura', 'idformulario' => 10]
                ,['idopcao' => 4, 'descricaoitem' => 'Seladora para Madeira', 'idformulario' => 10]
                ,['idopcao' => 5, 'descricaoitem' => 'Fundo Serralheiro/Primer', 'idformulario' => 10]
                ,['idopcao' => 6, 'descricaoitem' => 'Fundo Galvanizado', 'idformulario' => 10]
                ,['idopcao' => 7, 'descricaoitem' => 'Tinta Premium (Lume)', 'idformulario' => 10]
                ,['idopcao' => 8, 'descricaoitem' => 'Direto na Massa PVA/Acrílica', 'idformulario' => 10]
                ,['idopcao' => 9, 'descricaoitem' => 'Direto na Chapa', 'idformulario' => 10]
                ,['idopcao' => 0, 'descricaoitem' => 'Selecione A Opção', 'idformulario' => 11]
                ,['idopcao' => 1, 'descricaoitem' => '1', 'idformulario' => 11]
                ,['idopcao' => 2, 'descricaoitem' => '2', 'idformulario' => 11]
                ,['idopcao' => 3, 'descricaoitem' => '3', 'idformulario' => 11]
                ,['idopcao' => 4, 'descricaoitem' => '4', 'idformulario' => 11]
                ,['idopcao' => 5, 'descricaoitem' => '5', 'idformulario' => 11]
                ,['idopcao' => 6, 'descricaoitem' => '6', 'idformulario' => 11]
                ,['idopcao' => 7, 'descricaoitem' => '7', 'idformulario' => 11]
                ,['idopcao' => 8, 'descricaoitem' => '8', 'idformulario' => 11]
                ,['idopcao' => 9, 'descricaoitem' => '9', 'idformulario' => 11]
                ,['idopcao' => 0, 'descricaoitem' => 'Selecione A Opção', 'idformulario' => 12]
                ,['idopcao' => 1, 'descricaoitem' => 'Menos de 1:00 hr', 'idformulario' => 12]
                ,['idopcao' => 2, 'descricaoitem' => 'De 1:00 a 2:00 hr', 'idformulario' => 12]
                ,['idopcao' => 3, 'descricaoitem' => 'De 2:00 a 3:00 hr', 'idformulario' => 12]
                ,['idopcao' => 4, 'descricaoitem' => 'De 3:00 a 4:00 hr', 'idformulario' => 12]
                ,['idopcao' => 5, 'descricaoitem' => 'De 4:00 a 5:00 hr', 'idformulario' => 12]
                ,['idopcao' => 6, 'descricaoitem' => 'De 5:00 a 6:00 hr', 'idformulario' => 12]
                ,['idopcao' => 7, 'descricaoitem' => 'Mais de 6:00 hr', 'idformulario' => 12]
                ,['idopcao' => 0, 'descricaoitem' => 'Selecione A Opção', 'idformulario' => 13]
                ,['idopcao' => 1, 'descricaoitem' => 'Rolo Pelo Baixo(Anti-Respingo)', 'idformulario' => 13]
                ,['idopcao' => 2, 'descricaoitem' => 'Rolo Pelo Alto', 'idformulario' => 13]
                ,['idopcao' => 3, 'descricaoitem' => 'Rolo de Espuma', 'idformulario' => 13]
                ,['idopcao' => 4, 'descricaoitem' => 'Rolo de Epoxi', 'idformulario' => 13]
                ,['idopcao' => 5, 'descricaoitem' => 'Pincel para Base Água', 'idformulario' => 13]
                ,['idopcao' => 6, 'descricaoitem' => 'Pincel para Base Solvente', 'idformulario' => 13]
                ,['idopcao' => 7, 'descricaoitem' => 'Pistola de Ar Direto', 'idformulario' => 13]
                ,['idopcao' => 8, 'descricaoitem' => 'Pistola de Compressor', 'idformulario' => 13]
                ,['idopcao' => 9, 'descricaoitem' => 'Desempenadeira de Aço Inox', 'idformulario' => 13]
                ,['idopcao' => 10, 'descricaoitem' => 'Desempenadeira de Aço Carbono', 'idformulario' => 13]
                ,['idopcao' => 11, 'descricaoitem' => 'Desempenadeira de PVC', 'idformulario' => 13]
                ,['idopcao' => 12, 'descricaoitem' => 'Rolo Cabelo de Anjo (Textura)', 'idformulario' => 13]
                ,['idopcao' => 13, 'descricaoitem' => 'Rolo de Espuma (Efeito Textura Baixa)', 'idformulario' => 13]
                ,['idopcao' => 0, 'descricaoitem' => 'Selecione A Opção	', 'idformulario' => 4]
            ]
        );
    }
}
