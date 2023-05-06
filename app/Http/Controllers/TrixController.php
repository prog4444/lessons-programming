<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Trix;
use Illuminate\Http\Request;

class TrixController extends Controller
{
    public function index()
    {
        return view('trix');
    }
 
    public function store(Request $request)
    {
        // $r = Post::all();
        // return view('show', compact('r'));
        $this->validate($request, [
            'title' => 'required|string|min:2|max:1000',
        ]);
        $arr =$request->all();
        $comment = Post::create($arr);
        return view('show', compact('comment'));
    }
 
    public function upload(Request $request)
    {
    }
}
