<?php

namespace App\Http\Controllers;

use App\Models\Zadacha;
use Illuminate\Http\Request;

class ZadachaController extends Controller
{
    public function index()
    {
        return view('masalaCreate');
    }
    public function store()
    {
        $data = request()->validate([
            'title' => 'string',
            'description' => 'string'

        ]);
        Zadacha::create($data);
        return back();
    }
}