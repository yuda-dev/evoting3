<?php

namespace App\Http\Controllers;

use App\Kandidat;
use App\Pemilih;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $title = 'Dashboard';
        $kandidat = Kandidat::all();
        $nama_kandidat =[];
        $jumlah_suara_kandidat = [];
        foreach($kandidat as $kdt)
        {
            $nama_kandidat[] = $kdt->nama;
            $jumlah_suara_kandidat[] = $kdt->jumlah_suara;
        }
        return view('dashboard.index',compact('title','kandidat','nama_kandidat','jumlah_suara_kandidat'));
    }
}
