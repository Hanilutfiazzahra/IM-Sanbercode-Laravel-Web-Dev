<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
        public function store(Request $request, $book_id) {
        $request->validate([
            'content' => 'required'
        ]);

        $userId = Auth::id();

        $comment = new Comment;
        $comment->content = $request->input('content');
        $comment->user_id = $userId;
        $comment->book_id = $book_id;

        $comment->save();

        return redirect('/book/'.$book_id);

    }
}
