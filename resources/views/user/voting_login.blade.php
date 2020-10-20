@extends('frontend.master')


@section('content')

<?php
date_default_timezone_set('Asia/Jakarta');
$jam=date("G");
if($jam>=0&&$jam<=11)
$sapa="Selamat Pagi,";
else if($jam>=12&&$jam<=15)
$sapa="Selamat Siang,";
else if($jam>=16&&$jam<=18)
$sapa="Selamat Sore,";
else if($jam>=19&&$jam<=23)
$sapa="Selamat Malam,";

$logo = \App\Logo::all();
?>
<div class="container">
    <div class="d-none d-md-block">
        <div class="card mt-5 mb-5" style="border-color: rgb(30, 231, 30);">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6 sapaan">
                        <div class="d-flex h-100">
                            <div class="justify-content-center align-self-center">
                                @foreach ($logo as $lg)
                                <center>
                                    <img src="{{ url('frontend', $lg->photo) }}" width="50%" alt="">
                                    <h5 class="mt-3"><strong>Hallo, {{ $sapa }}</strong></h5>
                                    <p>Silahkan Masukan Token dan mulailah untuk <strong>Memilih</strong> sang Juara.
                                    </p>
                                </center>
                                @endforeach
                                <hr>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card" style="margin-left: 100px">
                            <div class="card-body">
                                <center><img src="{{ asset('adminlte/voting.png') }}" style="height: 150px;width: 180px"
                                        alt=""></center>
                                <hr>
                                @if($message = Session::get('Gagal'))
                                <div class="row">
                                    <div class="col">
                                        <div class="alert alert-warning">
                                            <strong>Gagal!</strong> {{ $message }}.
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                @endif
                                <form method="POST" action="{{ url('cektoken') }}">
                                    @csrf
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" name="usertoken"
                                            placeholder="Masukan Token" autocomplete="off">
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <button type="submit" class="btn btn-primary btn-block"><i
                                                    class="fa fa-sign"></i> Masuk</button>
                                            <a href="{{url('register')}}" class="btn btn-success btn-block"></i>Belum
                                                Punya Token?</a>
                                        </div>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="sm-block d-md-none">
        <div class="card mt-3 mb-3" style="border-color: rgb(30, 231, 30)">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6 sapaan">
                        @foreach ($logo as $lg)
                        <center>
                            <img src="{{ url('frontend', $lg->photo) }}" width="50%" alt="">
                            <h5 class="mt-3"><strong>Hallo, {{ $sapa }}</strong></h5>
                            <p>Silahkan Masukan Token dan mulailah untuk <strong>Memilih</strong> sang Juara.
                            </p>
                        </center>
                        @endforeach
                        <hr>
                    </div>
                    <div class="col-md-6">
                        <div class="card" style="margin-left: 13px">
                            <div class="card-body">
                                <center><img src="{{ asset('adminlte/voting.png') }}" style="height: 150px;width: 180px"
                                        alt=""></center>
                                <hr>
                                @if($message = Session::get('Gagal'))
                                <div class="row">
                                    <div class="col">
                                        <div class="alert alert-warning">
                                            <strong>Gagal!</strong> {{ $message }}.
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                @endif
                                <form method="POST" action="{{ url('cektoken') }}">
                                    @csrf
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" name="usertoken"
                                            placeholder="Masukan Token" autocomplete="off">
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <button type="submit" class="btn btn-primary btn-block"><i
                                                    class="fa fa-sign"></i> Masuk</button>
                                            <a href="{{url('register')}}" class="btn btn-success btn-block"></i>Belum
                                                Punya Token?</a>
                                        </div>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-12">
            <h6><strong>Tatatertib Pemilu:</strong></h6>
            <hr>
            <p>1. Hanya dapat memilih satu kandidat</p>
            <p>2. Pemilih hanya mempuyai satu akun / token </p>
            <p>3. Dilarang membuat akun GANDA</p>
            <p>4. Yang melanggar akan otomatis di BANNED </p>
            <hr>
        </div>
    </div>

    <div class="row mt-3 mb-2">
        <div class="col text-center">
            Copyright by <strong>Yuda Muhtar</strong>
        </div>
    </div>
</div>

@endsection
