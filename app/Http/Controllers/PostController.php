<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index() {
        $posts = Post::whereStatus(true)
        ->get();

        return view('blog.index', compact('posts'));
    }

    public function add() {
        return view('blog.add');
    }

    public function store(Request $request) {
        $this->validate($request, [
            'title' => 'required|max:255',
            'body' => 'required|max:65000',
        ]);

        $data = $request->all();

        Post::create($data);

        return redirect()->route('blog.index');
    }

    public function edit(Request $request, $id) {
        $post = Post::whereId($id)
        ->firstOrFail();

        return view('blog.edit', compact('post'));
    }

    public function update(Request $request, $id) {

        $data = $request->all();

        Post::whereId($id)
        ->first()
        ->update($data);

        return redirect()->route('blog.index');
    }

    public function delete($id) {

        Post::whereId($id)
        ->first()
        ->delete();

        return redirect()->route('blog.index');
    }
}