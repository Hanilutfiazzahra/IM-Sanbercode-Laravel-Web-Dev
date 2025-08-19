<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function register() {
        return view('register');
    }

    public function kirim(Request $request) {
        $first = $request->input("first");
        $last = $request->input("last");
        return view('welcome', ['first' => $first, 'last' => $last]);
    }
}
