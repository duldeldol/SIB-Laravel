<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    // Properti data array 5 genre buku
    private $genres = [
        [
            'id' => 1,
            'name' => 'Social Realism',
            'description' => 'Karya sastra yang memotret realitas kehidupan masyarakat kelas bawah secara jujur.'
        ],
        [
            'id' => 2,
            'name' => 'Psychological Thriller',
            'description' => 'Fiksi yang mendalami ketegangan batin, rasa takut, dan konflik psikologis.'
        ],
        [
            'id' => 3,
            'name' => 'Historical Allegory',
            'description' => 'Narasi fiksi alegoris sejarah perjuangan yang merefleksikan martabat bangsa.'
        ],
        [
            'id' => 4,
            'name' => 'Philosophical Non-Fiction',
            'description' => 'Literatur kajian pemikiran mendalam mencakup dialektika dan bernalar logis.'
        ],
        [
            'id' => 5,
            'name' => 'Literary Journalism',
            'description' => 'Fiksi naratif yang mentransformasikan fakta investigatif menjadi karya sastra.'
        ],
    ];

    // Method untuk mengambil data array genre
    public function getGenres()
    {
        return $this->genres;
    }
}
