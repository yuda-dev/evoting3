<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Logo;

class LogoController extends Controller
{
    public function add($id)
    {
        $title = 'Profile Sekolah / Instansi';
        $dt = Logo::find($id);
        return view('logo.add', compact('title', 'dt'));
    }

    public function update(Request $request, $id)
    {
        $data = Logo::find($id);
        $data->nama = $request->nama;
        $file = $request->file('photo');
        if ($file) {
            $nama = time() . '-' . $file->getClientOriginalName();
            $file->move('frontend', $nama);
            $data->photo = $nama;
        }

        $data->save();

        \Session::flash('sukses', 'Data Berhasil di update');

        return redirect()->back();
    }
}
