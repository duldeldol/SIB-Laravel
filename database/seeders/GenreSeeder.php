<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenreSeeder extends Seeder
{
    public function run(): void
    {
        $genres = [
            [
                'name' => 'Social Realism',
                'description' => 'Karya sastra yang memotret realitas kehidupan masyarakat kelas bawah secara jujur.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Psychological Thriller',
                'description' => 'Fiksi yang mendalami ketegangan batin, rasa takut, dan konflik psikologis.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Historical Allegory',
                'description' => 'Narasi fiksi alegoris sejarah perjuangan yang merefleksikan martabat bangsa.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Philosophical Non-Fiction',
                'description' => 'Literatur kajian pemikiran mendalam mencakup dialektika dan bernalar logis.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Literary Journalism',
                'description' => 'Fiksi naratif yang mentransformasikan fakta investigatif menjadi karya sastra.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('genres')->insert($genres);
    }
}
