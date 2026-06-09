<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        \App\Models\User::factory(100)->create();
        \App\Models\Buku::factory(100)->create();
        \App\Models\KategoriBuku::factory(100)->create();
        \App\Models\KategoriBukuRelasi::factory(70)->create();
        // \App\Models\KoleksiPribadi::factory(70)->create();
        \App\Models\Peminjaman::factory(70)->create();
        // \App\Models\UlasanBuku::factory(70)->create();
    }
}
