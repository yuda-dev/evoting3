<?php

namespace App\Http\Controllers;

use App\Kandidat;
use App\Pemilih;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $title = 'Dashboard';
        $pemilih = Pemilih::where('user_id', Auth::id())->get();
        $kandidat = Kandidat::all();
        return view('dashboard.index', compact('title', 'kandidat', 'pemilih'));
    }

    public function store(Request $request)
    {
        $jumlah = $request->jumlah;

        for ($i = 0; $i < $jumlah; $i++) {
            $karakter = 'ABCDEFGHIJKLMNOPQRSTUPWXYZ0123456789';
            $string = '';

            for ($x = 0; $x < 10; $x++) {
                $pos = rand(0, strlen($karakter) - 1);
                $string .= $karakter[$pos];
            }
            $token = strtoupper($string);

            //CEK TOKEN SUDAH TERDAFTAR ATAU BELUM
            $cek = Pemilih::find($token);

            if (empty($cek)) {

                $data = new Pemilih();
                $data->username = $token;
                $data->user_id = Auth::id();
                //menambahkan kadaluarsa token itungan menit
                $data->valid_until = Carbon::now()->addMinutes(480);
                $data->save();
            }

            $user = Auth::id();
            User::where('id', $user)->update(['status_pilih' => 2]);
        }
        \Session::flash('sukses', 'Token berhasil dibuat');
        return redirect()->back();
    }
}
