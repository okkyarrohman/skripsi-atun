<?php

namespace Database\Seeders;

<<<<<<< Updated upstream
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
=======
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
>>>>>>> Stashed changes

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
<<<<<<< Updated upstream
=======
        $admin = User::create([
            'name' => 'admin',
            'email' => 'admin@atun.com',
            'Password' => bcrypt('admin123'),
        ]);
        $admin->assignRole('admin');
>>>>>>> Stashed changes
        $guru->assignRole('guru');
        $siswa->assignRole('siswa');
    }
}
