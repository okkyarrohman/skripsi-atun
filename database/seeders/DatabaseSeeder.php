<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Modul;
use App\Models\Simulasi;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([RoleSeeder::class]);
        $this->call([UserSeeder::class]);

        Modul::factory(5)->create();
        Simulasi::factory(5)->create();
    }
}
