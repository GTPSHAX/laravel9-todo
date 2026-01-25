<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Aspirasi;
use App\Models\InputAspirasi;
use App\Models\Kategori;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            "username" => "Admin",
            "email" => "admin@admin.com",
            "password" => Hash::make('anjay123'),
            "role" => "admin",
            "nis" => "",
            "kelas" => ""
        ]);
        User::create([
            "username" => "Siswa",
            "email" => "siswa@siswa.com",
            "password" => '',
            "role" => "siswa",
            "nis" => "123",
            "kelas" => "XII PPLG 2"
        ]);

        Kategori::create([
            "ket_kategori" => "Inovasi"
        ]);
        Kategori::create([
            "ket_kategori" => "Renovasi"
        ]);
        Kategori::create([
            "ket_kategori" => "Reformasi"
        ]);

        InputAspirasi::create([
            "nis" => "123",
            "id_kategori" => "2",
            "lokasi" => "Halaman sekolah",
            "ket" => "Halamannya kotor"
        ]);

        Aspirasi::create([
            "id_aspirasi" => "1",
            "status" => "Proses",
            "id_kategori" => "2",
            "feedback" => "Oke baik"
        ]);
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
