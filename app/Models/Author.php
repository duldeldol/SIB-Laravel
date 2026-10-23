<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    // Properti data array 5 penulis
    private $authors = [
        [
            'id' => 1,
            'name' => 'Mochtar Lubis',
            'photo' => 'mochtar_lubis.jpg',
            'bio' => 'Sastrawan & jurnalis pelopor ketegasan moral dan kritik sosial.'
        ],
        [
            'id' => 2,
            'name' => 'Y.B. Mangunwijaya',
            'photo' => 'yb_mangunwijaya.jpg',
            'bio' => 'Romo Mangun: arsitek dan sastrawan humanis peraih Penghargaan ASEAN.'
        ],
        [
            'id' => 3,
            'name' => 'Ahmad Tohari',
            'photo' => 'ahmad_tohari.jpg',
            'bio' => 'Sastrawan realisme pedesaan asal Banyumas, memotret empati rakyat kecil.'
        ],
        [
            'id' => 4,
            'name' => 'Seno Gumira Ajidarma',
            'photo' => 'seno_gumira.jpg',
            'bio' => 'Penulis jurnalisme sastrawi: Ketika jurnalisme dibungkam, sastra bicara.'
        ],
        [
            'id' => 5,
            'name' => 'Tan Malaka',
            'photo' => 'tan_malaka.jpg',
            'bio' => 'Pahlawan nasional, perumus konsep dialektika dan logika ilmiah Indonesia.'
        ],
    ];

    // Method untuk mengambil data array author
    public function getAuthors()
    {
        return $this->authors;
    }
}
