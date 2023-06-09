<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(SetoresTableSeeder::class);
        $this->call(CargosTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(CabFormulariosTableSeeder::class);
        $this->call(ItemFormulariosTableSeeder::class);
    }
}
