<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function index()
    {
        $authorModel = new Author(); // Membuat objek model
        $authors = $authorModel->getAuthors(); // Mengakses method data array

        return view('author', ['authors' => $authors]); // Mengirim data ke view
    }
}
