<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('trix');
    }
    public function store()
    {
        $data = request()->validate([
            'title' => 'string',
            'description' => 'string'

        ]);
        Post::create($data);
        return back();
    }
}
