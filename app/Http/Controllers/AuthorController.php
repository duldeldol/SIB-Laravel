<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class AuthorController extends Controller
{
    public function index()
    {
        $authors = Author::all();

        return response()->json([
            'success' => true,
            'message' => 'Get All Resource',
            'data' => $authors
        ], 200);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'photo' => 'nullable',
            'bio' => 'nullable|string',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Validation error',
                'errors' => $validator->errors()
            ], 422);
        }

        $data = $validator->validated();

        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->storeAs('authors', $filename, 'public');
            $data['photo'] = $filename;
        }

        $author = Author::create($data);

        return response()->json([
            'success' => true,
            'message' => 'Resource created successfully',
            'data' => $author
        ], 201);
    }

    public function show($id)
    {
        $author = Author::find($id);

        if (!$author) {
            return response()->json([
                'success' => false,
                'message' => 'Resource not found'
            ], 404);
        }

        return response()->json([
            'success' => true,
            'message' => 'Get Resource',
            'data' => $author
        ], 200);
    }

    public function update(Request $request, $id)
    {
        $author = Author::find($id);

        if (!$author) {
            return response()->json([
                'success' => false,
                'message' => 'Resource not found'
            ], 404);
        }

        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'photo' => 'nullable',
            'bio' => 'nullable|string',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Validation error',
                'errors' => $validator->errors()
            ], 422);
        }

        $data = $validator->validated();

        if ($request->hasFile('photo')) {
            if ($author->photo && Storage::disk('public')->exists('authors/' . $author->photo)) {
                Storage::disk('public')->delete('authors/' . $author->photo);
            }
            $file = $request->file('photo');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->storeAs('authors', $filename, 'public');
            $data['photo'] = $filename;
        }

        $author->update($data);

        return response()->json([
            'success' => true,
            'message' => 'Resource updated successfully',
            'data' => $author
        ], 200);
    }

    public function destroy($id)
    {
        $author = Author::find($id);

        if (!$author) {
            return response()->json([
                'success' => false,
                'message' => 'Resource not found'
            ], 404);
        }

        if ($author->photo && Storage::disk('public')->exists('authors/' . $author->photo)) {
            Storage::disk('public')->delete('authors/' . $author->photo);
        }

        $author->delete();

        return response()->json([
            'success' => true,
            'message' => 'Resource deleted successfully',
            'data' => $author
        ], 200);
    }
}
