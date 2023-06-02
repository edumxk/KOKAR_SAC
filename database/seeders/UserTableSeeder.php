<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert(
            [
                [
                    'name' => 'Administrador',
                    'email' => 'admin@kokar.com.br',
                    'password' => bcrypt('admin123'),
                    'codsetor' => '1',
                    'codcargo' => '1',
                    'codfuncao' => '1',
                    'codnivel' => '1',
                    'codusuarioold' => '1',
                    'usuario' => 'admin'
                ],
                [
                    'name' => 'Edson Alves',
                    'email' => 'edson@kokar.com.br',
                    'password' => bcrypt('edson123'),
                    'codsetor' => '2',
                    'codcargo' => '2',
                    'codfuncao' => '2',
                    'codnivel' => '2',
                    'codusuarioold' => '2',
                    'usuario' => 'edson'
                ]
            ]
        );
    }
}
