<?php

namespace App\Http\Controllers;

use App\Kandidat;
use App\Pemilih;
use Illuminate\Http\Request;

class VotingController extends Controller
{
    public function index(Request $data)
    {
        if($data->session()->get('token'))
        {
            $kandidat= Kandidat::all();
            return view('voting.index',compact('kandidat'));
        } else{
            return redirect('user/voting_login');
        }
        
    }

    public function voting_detail($id)
    {
        $kandidat_detail= Kandidat::find($id);
        return view('voting.detail',compact('kandidat_detail'));
    }

    public function simpan_suara($idkandidat, Request $data)
    {
        $jumlah = Kandidat::where('id', $idkandidat)->get();
        foreach($jumlah as $key)
        {
            $jumlah_suara = $key->jumlah_suara;
        }

        Kandidat::where('id', $idkandidat)->update(['jumlah_suara' => $jumlah_suara+1]);
        Pemilih::where('username', $data->session()->get('token'))->update(['status_id' => 1]);
        return redirect('user/logout_voting');
    }
}
