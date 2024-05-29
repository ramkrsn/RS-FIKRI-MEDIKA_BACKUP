<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Artikel;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        Artikel::create([
            'title' => 'Mana Lebih Baik, Awali Buka Puasa dengan Air Hangat atau Air dingin',
            'description' => 'Berbuka puasa selalu menjadi saat yang dinantikan oleh setiap umat muslim yang menjalani ibadah puasa di bulan ... ',
            'image' => 'jahe.png',
        ]);
    }
}
