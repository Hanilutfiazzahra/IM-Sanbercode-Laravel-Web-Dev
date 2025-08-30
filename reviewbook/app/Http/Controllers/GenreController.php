<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Models\Genre;

class GenreController extends Controller
{

    public function create () {
        return view('genre.tambah');
    }

    public function store (Request $request) {
        $request->validate([
            'name' => 'required|min:5',
            'description' => 'required'
        ]);

        DB::table('genres')->insert([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        // Flash success message
        return redirect('/genre')->with('success', 'Genre berhasil ditambahkan!');
    }

    public function index () {
        $genres = DB::table('genres')->get();

        return view('genre.list', ['genres' => $genres]);
    }

    public function show ($id) {
        $genre = Genre::find($id);

        return view('genre.detail', ['genre' => $genre]);
    }

    public function edit ($id) {
        $genre = DB::table('genres')->find($id);

        return view('genre.edit', ['genre' => $genre]);
    }

    public function update (Request $request, $id) {
        $request->validate([
            'name' => 'required|min:5',
            'description' => 'required'
        ]);

        DB::table('genres')->where('id', $id)->update([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'updated_at' => Carbon::now()
        ]);

        // Flash success message
        return redirect('/genre')->with('success', 'Genre berhasil diperbarui!');
    }

    public function destroy ($id) {
        DB::table('genres')->where('id', $id)->delete();

        // Flash success message
        return redirect('/genre')->with('success', 'Genre berhasil dihapus!');
    }
}
