<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function create()
    {
        return view('post.create');
    }

    public function store()
    {
        $data = request()->validate([
            'title' => 'string',
            'description' => 'string'

        ]);
        Post::create($data);
        return redirect()->route('show.index');
    }

    public function show(Post $post)
    {
        return view('post.index', compact('post'));
    }

    public function index()
    {
        $pro = Post::all();
        return view('post.show', compact('pro'));
    }

    public function edit(Post $post)
    {
        return view('post.edit', compact('post'));
    }

    public function update(Post $post)
    {       
        $data = request()->validate([
            'title' => 'string',
            'description' => 'string'

        ]);
        
        $post->update($data);
        return redirect()->route('show.index', $post->id);

    }

    public function delete( )
    {
        $post = Post::withTrashed()->find(2);
        $post->restore();
        dd('deleted');
        
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('show.index');
        
    }




    public function index1()
    {
        return view('admin.trix');
    }
    public function store1()
    {
        $data = request()->validate([
            'title' => 'string',
            'description' => 'string'

        ]);
        Post::create($data);
        return back();
    }
}
