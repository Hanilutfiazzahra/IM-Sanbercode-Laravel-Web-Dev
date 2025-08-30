<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Genre;
use App\Models\Book;
use File;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Get all books
        $book = Book::all();

        // Return the view with books data
        return view('book.tampil', ['book' => $book]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Get all genres for the form dropdown
        $genre = Genre::all();

        // Return the form view with genre data
        return view('book.tambah', ['genre' => $genre]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'title' => 'required',
            'summary' => 'required',
            'stok' => 'required|integer',
            'image' => 'required|mimes:jpeg,png,jpg,svg|max:2048',
            'genre_id' => 'required',
        ]);

        // Process the image upload
        $newImageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('image'), $newImageName);

        // Create new book and save to database
        $book = new Book;
        $book->title = $request->input('title');
        $book->summary = $request->input('summary');
        $book->stok = $request->input('stok');
        $book->image = $newImageName;
        $book->genre_id = $request->input('genre_id');
        $book->save();

        // Flash success message and redirect
        return redirect('/book')->with('success', 'Buku berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Find the book by ID
        $book = Book::find($id);

        // Return the detail view with book data
        return view('book.detail', ['book' => $book]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Get all genres for the form dropdown
        $genre = Genre::all();

        // Find the book by ID
        $book = Book::find($id);

        // Return the edit form with book and genre data
        return view('book.edit', ['book' => $book, 'genre' => $genre]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Validate the incoming request
        $request->validate([
            'title' => 'required',
            'summary' => 'required',
            'stok' => 'required|integer',
            'image' => 'mimes:jpeg,png,jpg,svg|max:2048',
            'genre_id' => 'required',
        ]);

        // Find the book by ID
        $book = Book::find($id);

        // If image is uploaded, delete old one and upload new image
        if ($request->has('image')) {
            File::delete('image/' . $book->image);
            $newImageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('image'), $newImageName);
            $book->image = $newImageName;
        }

        // Update book details
        $book->title = $request->input('title');
        $book->summary = $request->input('summary');
        $book->stok = $request->input('stok');
        $book->genre_id = $request->input('genre_id');
        $book->save();

        // Flash success message and redirect
        return redirect('/book')->with('success', 'Buku berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Find the book by ID
        $book = Book::find($id);

        // Delete the associated image file
        File::delete('image/' . $book->image);

        // Delete the book record from the database
        $book->delete();

        // Flash success message and redirect
        return redirect('/book')->with('success', 'Buku berhasil dihapus!');
    }
}

