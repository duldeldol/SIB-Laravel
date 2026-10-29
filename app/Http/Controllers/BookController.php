<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::with(['author', 'genre'])->get();

        return response()->json([
            'success' => true,
            'message' => 'Get All Resource',
            'data' => $books
        ], 200);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric',
            'stock' => 'required|integer',
            'cover_photo' => 'nullable',
            'genre_id' => 'nullable|integer',
            'author_id' => 'required|integer',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Validation error',
                'errors' => $validator->errors()
            ], 422);
        }

        $book = Book::create($validator->validated());

        return response()->json([
            'success' => true,
            'message' => 'Resource created successfully',
            'data' => $book
        ], 201);
    }

    public function show($id)
    {
        $book = Book::with(['author', 'genre'])->find($id);

        if (!$book) {
            return response()->json([
                'success' => false,
                'message' => 'Resource not found'
            ], 404);
        }

        return response()->json([
            'success' => true,
            'message' => 'Get Resource',
            'data' => $book
        ], 200);
    }

    public function update(Request $request, $id)
    {
        $book = Book::find($id);

        if (!$book) {
            return response()->json([
                'success' => false,
                'message' => 'Resource not found'
            ], 404);
        }

        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric',
            'stock' => 'required|integer',
            'cover_photo' => 'nullable',
            'genre_id' => 'nullable|integer',
            'author_id' => 'required|integer',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Validation error',
                'errors' => $validator->errors()
            ], 422);
        }

        $book->update($validator->validated());

        return response()->json([
            'success' => true,
            'message' => 'Resource updated successfully',
            'data' => $book
        ], 200);
    }

    public function destroy($id)
    {
        $book = Book::find($id);

        if (!$book) {
            return response()->json([
                'success' => false,
                'message' => 'Resource not found'
            ], 404);
        }

        $book->delete();

        return response()->json([
            'success' => true,
            'message' => 'Resource deleted successfully',
            'data' => $book
        ], 200);
    }
}
