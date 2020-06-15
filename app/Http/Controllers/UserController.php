<?php

namespace App\Http\Controllers;

use App\Kandidat;
use App\Pemilih;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function index()
    {
        return view('user.index');
    }

    public function voting_login()
    {
        return view('user.voting_login');
    }

    public function logout_voting(Request $data)
    {
        $data->session()->forget('token');
        return view('user.logout_voting');
    }

    public function cektoken(Request $request)
    {
        $token = $request->usertoken;
        $cek = Pemilih::where(['username' => $token])->first();
        $status = Pemilih::where(['username' => $token, 'status_id' => 2])->first();

        if(!$cek)
        {
            Session::flash('Gagal','Token tidak ditemukan');
            return redirect()->back();
        } else
        {
            if(!$status)
            {
                Session::flash('Gagal','Token telah digunakan');
                return redirect()->back();
            } else
            {
                $request->session()->put('token',$token);
                return redirect('voting');
            }
        }
    }
}
