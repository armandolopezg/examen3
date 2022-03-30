<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\HackersSeed;
use Database\Seeders\GrupoSeeder;
use Database\Seeders\PerfilSeeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(HackersSeed::class);
        $this->call(GrupoSeeder::class);
        $this->call(PerfilSeeder::class);
        
    }
}
