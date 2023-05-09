<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $pro = Post::all();
        return view('admin.index', compact('pro'));
    }

    public function index_sign()
    {
        $pro = Post::all();
        return view('admin.show', compact('pro'));
    }
}
