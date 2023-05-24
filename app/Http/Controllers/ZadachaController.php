<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\User;
use App\Models\Zadacha;
use Illuminate\Http\Request;

class ZadachaController extends Controller
{
    public function showZadacha()
    {
        $comments = Comment::with('user')->where('parent_id',null)->where('zadacha_id', 1)->latest('id')->paginate(25);
        $zadacha = Zadacha::where('id', 1)->get();
        return view('showzadacha', compact('zadacha', 'comments'));
    }

    public function showZadachaOne()
    {
        $comments = Comment::with('user')->where('parent_id',null)->where('zadacha_id', 3)->latest('id')->paginate(25);
        $zadacha = Zadacha::where('id', 3)->get();
        return view('showzadacha', compact('zadacha', 'comments'));
    }

    public function showZadachaTho()
    {
        $comments = Comment::with('user')->where('parent_id',null)->where('zadacha_id', 5)->latest('id')->paginate(25);
        $zadacha = Zadacha::where('id', 5)->get();
        return view('showzadacha', compact('zadacha', 'comments'));
    }

    public function index()
    {
        $pro = Zadacha::all();
        $data = [
            'count_user' => User::latest()->count(),
            'menu'       => 'admin.menu.v_menu_admin',
            'content'    => 'admin.content.view_user',
            'masala' => 'masala.masalaShow',
            'title'    => 'Table User'
        ];
       
        return view('admin.layouts.t_template', compact(['pro']), $data);
       
    }

    public function store()
    {
        $data = request()->validate([
            'title' => 'string',
            'description' => 'string'

        ]);
        Zadacha::create($data);
        return redirect()->route('masala.index');
    }

    public function show(Zadacha $post)
    {
        return view('masala.masalaIndex', compact('post'));
    }

    public function masala()
    {
        return view('masala.masalaCreate');
    }

  

    public function edit(Zadacha $post)
    {
        return view('masala.masalaEdit', compact('post'));
    }

    public function update(Zadacha $post)
    {
       
        $data = request()->validate([
            'title' => 'string',
            'description' => 'string'

        ]);
        
        $post->update($data);
        return redirect()->route('masala.show', $post->id);

    }

    public function delete($id)
    {
        $post = Zadacha::find($id);
        $post->delete();
        return redirect()->route('masala.index');
        
    }

    public function destroy(Zadacha $post)
    {
        $post->delete();
        return redirect()->route('masala.index');
        
    }
}
