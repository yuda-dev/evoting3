<?php

namespace App\Http\Controllers;

use App\Kandidat;
use Illuminate\Http\Request;

class HitungCepatController extends Controller
{
    public function index()
    {
        $title = 'Quick Count';
        $kandidat = Kandidat::all();
        return view('hitung_cepat.index', compact('kandidat', 'title'));
    }
}
