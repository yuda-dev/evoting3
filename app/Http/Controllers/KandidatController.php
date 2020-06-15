<?php

namespace App\Http\Controllers;

use App\Kandidat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class KandidatController extends Controller
{
    public function index()
    {
        $title = 'Kandidat';
        $kandidat = Kandidat::all();
        return view('candidat.index',compact('title','kandidat'));
    }

    public function store(Request $request)
    {
        $data = new Kandidat();
        $data->nama = $request->nama;
        $data->visi = $request->visi;
        $data->misi = $request->misi;
        $file = $request->file('photo');
        if($file)
        {
            $file->move('kandidat', $file->getClientOriginalName());
            $data->photo = $file->getClientOriginalName();        
        }
        $data->save();
        \Session::flash('sukses','Kandidat Berhasil ditambahkan');

        return redirect()->back();
    }

    public function detail($id)
    {
        $title = 'Detail Kandidat';
        $detail = Kandidat::find($id);
        return view('candidat.detail',compact('title','detail'));
    }

    public function update(Request $request, $id)
    {
        $data = Kandidat::find($id);
        $data->nama = $request->nama;
        $data->visi = $request->visi;
        $data->misi = $request->misi;
        $file = $request->file('photo');
        if($file)
        {
            $file->move('kandidat', $file->getClientOriginalName());
            $data->photo = $file->getClientOriginalName();        
        }
        $data->save();
        \Session::flash('sukses','Kandidat Berhasil diubah');

        return redirect()->back();
    }

    public function delete($id)
    {
        Kandidat::find($id)->delete();
        \Session::flash('sukses','Kandidat Berhasil dihapus');

        return redirect()->back();
    }
}
