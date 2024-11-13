<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;


class PostController extends Controller
{
    public function create() {
        return view('post.create');
    }


    public function store(Request $request) {
        Gate::authorize('test');
        
        $validated = $request->validate(
            [
                'title' => 'required|max:20',
                'body' => 'required|max:400',
            ]
        );

        $validated['user_id'] = auth()->id();

        $post = Post::create($validated);

        // 処理後、元のページに戻る
        // セッションを使って保存時のメッセージを表示
        return back()->with('message', '保存しました。');
    }


    public function index() {
        // 抽出条件を設定
        // $posts=Post::where('user_id', auth()->id())->get();

        // Eagerロードを使用。（postと同時にuserのデータも一括で取得）
        $posts=Post::with('user')->get();
        return view('post.index', compact('posts'));
    }


    public function show(Post $post) {
        return view('post.show', compact('post'));
    }


    public function edit(Post $post) {
        return view('post.edit', compact('post'));
    }


    public function update(Request $request, Post $post) {
        $validated = $request->validate(
            [
                'title' => 'required|max:20',
                'body' => 'required|max:400',
            ]
        );

        $validated['user_id'] = auth()->id();

        $post -> update($validated);

        $request -> session() -> flash('message', '更新しました');
        return back();
    }
}
