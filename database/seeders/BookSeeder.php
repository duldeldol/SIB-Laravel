<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    public function run(): void
    {
        $books = [
            [
                'title' => 'Harimau! Harimau!',
                'description' => 'Kisah perburuan damar di hutan rimba yang menguji kepemimpinan.',
                'price' => 82000.00,
                'stock' => 18,
                'cover_photo' => 'harimau_lubis.jpg',
                'genre_id' => 2,
                'author_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Burung-Burung Manyar',
                'description' => 'Roman sejarah pergulatan revolusi fisik Indonesia.',
                'price' => 115000.00,
                'stock' => 12,
                'cover_photo' => 'burung_manyar.jpg',
                'genre_id' => 3,
                'author_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Ronggeng Dukuh Paruk',
                'description' => 'Trilogi kehidupan penari ronggeng di pedalaman Jawa.',
                'price' => 94000.00,
                'stock' => 24,
                'cover_photo' => 'ronggeng_tohari.jpg',
                'genre_id' => 1,
                'author_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Saksi Mata',
                'description' => 'Antologi cerpen peraih penghargaan sastra mengenai keadilan.',
                'price' => 78000.00,
                'stock' => 15,
                'cover_photo' => 'saksi_mata.jpg',
                'genre_id' => 5,
                'author_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Madilog',
                'description' => 'Magnum opus filsafat: Materialisme, Dialektika, dan Logika.',
                'price' => 135000.00,
                'stock' => 30,
                'cover_photo' => 'madilog_tan.jpg',
                'genre_id' => 4,
                'author_id' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('books')->insert($books);
    }
}
