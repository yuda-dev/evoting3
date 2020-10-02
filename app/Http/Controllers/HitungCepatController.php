<?php

namespace App\Http\Controllers;

use App\Kandidat;
use Illuminate\Http\Request;

class HitungCepatController extends Controller
{
    public function index()
    {
        $kandidat = Kandidat::all();
        $nama_kandidat =[];
        $jumlah_suara_kandidat = [];
        foreach($kandidat as $kdt)
        {
            $nama_kandidat[] = $kdt->nama;
            $jumlah_suara_kandidat[] = $kdt->jumlah_suara;
        }
        return view('hitung_cepat.index',compact('kandidat','nama_kandidat','jumlah_suara_kandidat'));
    }
}
