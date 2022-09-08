<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Kelas;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Kelas::create([
            'kelas' => 'XI RPl 1',
            'max_siswa' => 40,
            'wali_kelas' => 'andi'
        ]);
        Kelas::create([
            'kelas' => 'XI OTKP 1',
            'max_siswa' => 40,
            'wali_kelas' => 'rud'
        ]);
        Kelas::create([
            'kelas' => 'XI AKL 2',
            'max_siswa' => 40,
            'wali_kelas' => 'bobi'
        ]);
        Kelas::create([
            'kelas' => 'XI BDP 2',
            'max_siswa' => 40,
            'wali_kelas' => 'anji'
        ]);
    }
}
