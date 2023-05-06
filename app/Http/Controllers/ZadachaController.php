<?php

namespace App\Http\Controllers;

use App\Models\Zadacha;
use Illuminate\Http\Request;

class ZadachaController extends Controller
{
    public function showZadaacha()
    {
        $zadacha = Zadacha::all();
        return view('showzadacha', compact('zadacha'));
    }
}
