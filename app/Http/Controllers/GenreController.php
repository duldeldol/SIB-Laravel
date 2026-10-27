<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    public function index()
    {
        $genreModel = new Genre(); // Membuat objek model
        $genres = $genreModel->getGenres(); // Mengakses method data array

        return view('genre', ['genres' => $genres]); // Mengirim data ke view
    }
}
