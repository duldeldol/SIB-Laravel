<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AuthorSeeder extends Seeder
{
    public function run(): void
    {
        $authors = [
            [
                'name' => 'Mochtar Lubis',
                'photo' => 'mochtar_lubis.jpg',
                'bio' => 'Sastrawan & jurnalis pelopor ketegasan moral dan kritik sosial.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Y.B. Mangunwijaya',
                'photo' => 'yb_mangunwijaya.jpg',
                'bio' => 'Romo Mangun: arsitek dan sastrawan humanis peraih Penghargaan ASEAN.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Ahmad Tohari',
                'photo' => 'ahmad_tohari.jpg',
                'bio' => 'Sastrawan realisme pedesaan asal Banyumas, memotret empati rakyat kecil.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Seno Gumira Ajidarma',
                'photo' => 'seno_gumira.jpg',
                'bio' => 'Penulis jurnalisme sastrawi: Ketika jurnalisme dibungkam, sastra bicara.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Tan Malaka',
                'photo' => 'tan_malaka.jpg',
                'bio' => 'Pahlawan nasional, perumus konsep dialektika dan logika ilmiah Indonesia.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('authors')->insert($authors);
    }
}
