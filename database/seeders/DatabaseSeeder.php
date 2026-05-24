<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        // 1. Akun Admin Utama 
        \App\Models\User::create([
            'name' => 'Admin Amikom',
            'email' => 'admin@amikom.ac.id',
            'password' => bcrypt('password'),
            'role' => 'admin',
        ]);

        // 2. Insert Kategori Event 
        $category = \App\Models\Category::create([
            'name' => 'Seminar IT',
            'slug' => 'seminar-it',
        ]);
        $category2 = \App\Models\Category::firstOrCreate([
            'name' => 'Entertaiment',
            'slug' => 'entertaiment',
        ]);
         $category3 = \App\Models\Category::firstOrCreate([
            'name' => 'Workshop',
            'slug' => 'workshop',
        ]);

        // 3. Insert Sampel Events 
        \App\Models\Event::create([
            'category_id' => $category2->id,
            'title' => 'Jazz Night Festival 2026',
            'description' => 'Nikmati  malam  yang  indah  dengan  alunan  musik  jazz yang merdu.',
            'date' => '2026-05-10 19:00:00',
            'location' => 'Amikom Baru',
            'price' => 50000,
            'stock' => 100,
            'poster_path' => 'posters/concert.png',
        ]);

        \App\Models\Event::create([
            'category_id' => $category->id,
            'title' => 'Hackaton - Unleash Your Inner Developer',
            'description' => 'Ayo  asah  skill  coding  kamu  dan  ciptakan  solusi inovatif untuk tantangan masa depan!',
            'date' => '2026-05-05 10:00:00',
            'location' => 'Inkubator Amikom',
            'price' => 50000,
            'stock' => 100,
            'poster_path' => 'posters/hackathon.png',
        ]);

        \App\Models\Event::create([
            'category_id' => $category->id,
            'title' => 'AI & FUTURE TECH SUMMIT 2026',
            'description' => 'Jelajahi  tren  terkini  dalam  kecerdasan  buatan  dan teknologi masa depan bersama para ahli di bidangnya.',
            'date' => '2026-05-01 13:00:00',
            'location' => 'Cinema Unit 6',
            'price' => 50000,
            'stock' => 100,
            'poster_path' => 'posters/workshop.png',
        ]);

        \App\Models\Event::create([
            'category_id' => $category3->id,
            'title' => 'Advanced Laravel & Vue.js Workshop',
            'description' => 'Pelatihan intensif selama 2 hari untuk membangun aplikasi web SPA (Single Page Application) modern.',
            'date' => '2026-05-01 13:00:00',
            'location' => 'Citra 2',
            'price' => 150000,
            'stock' => 50,
            'poster_path' => 'posters/js.png',
        ]);

        \App\Models\Event::create([
            'category_id' => $category3->id,
            'title' => 'Soundwave Indie Music Festival 2026',
            'description' => 'Festival musik tahunan terbesar yang menampilkan band-band indie lokal terbaik di Indonesia',
            'date' => '2026-07-20 15:00:00',
            'location' => 'Mandal Krida',
            'price' => 50000,
            'stock' => 150,
            'poster_path' => 'posters/indie.png',
        ]);

        \App\Models\Partner::create([
            'name' => 'PT. Trakindo Utama',
            'logo_url' => 'partners/5LW0XjkdOCfmwTktxEgWBuYpVPpN6n5Gi6TZocnv.jpg'
        ]);
    }
}
