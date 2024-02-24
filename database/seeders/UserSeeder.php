<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $guru = User::create([
            'name' => 'Guru',
            'email' => 'guru@atun.com',
            'password' => bcrypt('guru123'),
        ]);
        $siswa = User::create([
            'name' => 'siswa',
            'email' => 'siswa@atun.com',
            'password' => bcrypt('siswa123'),
        ]);
        $guru->assignRole('guru');
        $siswa->assignRole('siswa');
    }
}
