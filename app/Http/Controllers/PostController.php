<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function create() {
        return view('post.create');
    }


    public function store(Request $request) {
        $post = Post::create([
            'title' => $request->title,
            'body' => $request->body
        ]);

        // 処理後、元のページに戻る
        return back();
    }
}
