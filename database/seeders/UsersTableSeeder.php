<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert(
            [
                [
                    'user' => 'admin',
                    'name' => 'administrador',
                    'email' => 'admin@kokar.com.br',
                    'password' => bcrypt('senha123'),
                    'id_setor' => '1',
                    'id_cargo' => '1',
                    'nivel' => '0',
                    'winthor_user' => 'pcadmin',
                ],
                [
                    'user' => 'eduardo.cavalcante',
                    'name' => 'eduardo Patrick P. cavalcante',
                    'email' => 'eduardo.cavalcante@kokar.com.br',
                    'password' => bcrypt('senha123'),
                    'id_setor' => '1',
                    'id_cargo' => '1',
                    'nivel' => '1',
                    'winthor_user' => 'edu',

                ]
            ]
        );
    }
}
