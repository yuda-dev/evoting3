@extends('frontend.master')

@section('content')
<div class="container">
    <div class="d-none d-md-block">
        <div class="card mt-5 mb-5" style="border-color: rgb(30, 231, 30)">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="d-flex h-100">
                            <div class="justify-content-center align-self-center">
                                @foreach ($logo as $lg)
                                <center>
                                <img src="{{ url('frontend', $lg->photo) }}"
                                    width="50%" alt="">
                                <center>
                                <h5 class="mt-3"><strong>Selamat Datang,</strong></h5>
                                <p>Di Sistem E-voting <strong>{{ $lg->nama }}</strong>, silahkan pilih <strong>"Daftar"</strong> untuk
                                    mendapatkan token, dan Pilih <strong>"Voting"</strong> Untuk melakukan pemilihan
                                </p>
                                @endforeach
                                <a href="{{ url('register') }}" class="btn btn-success"> Daftar</a>
                                <a href="{{ url('user/voting_login') }}" class="btn btn-primary"> Voting</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <img src="{{ asset('frontend/vote.png') }}" width="100%" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="sm-block d-md-none">
        <div class="card mt-3 mb-3" style="border-color: rgb(30, 231, 30)">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <img src="{{ asset('frontend/vote.png') }}" width="100%" alt="">
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex h-100">
                            <div class="justify-content-center align-self-center">
                                @foreach ($logo as $lg)
                                <center>
                                <img src="{{ url('frontend', $lg->photo) }}"
                                    width="50%" alt="">
                                <center>
                                <h5 class="mt-3"><strong>Selamat Datang,</strong></h5>
                                <p>Di Sistem E-voting <strong>{{ $lg->nama }}</strong>, silahkan pilih <strong>"Daftar"</strong> untuk
                                    mendapatkan token, dan Pilih <strong>"Voting"</strong> Untuk melakukan pemilihan
                                </p>
                                @endforeach
                                <a href="{{ url('register') }}" class="btn btn-success"> Daftar</a>
                                <a href="{{ url('/user/voting_login') }}" class="btn btn-primary"> Voting</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr>

    <div class="row mt-2">
        <div class="col-md-6">
            <h6><strong>Petunjuk Pemilihan ( Jika Belum punya akun / token)</strong></h6>
            <hr>
            <p>1. Klik Daftar</p>
            <p>2. Isi form dengan data yang valid</p>
            <p>3. Buat Token di menu dashboard</p>
            <p>4. Masukan Token untuk memilih kandidat </p>
            <p>5. <a href="{{ url('hitung_cepat') }}"> Login</a> Untuk melihat perolehan suara secara realtime.</p>
            <hr>
        </div>
        <div class="col-md-6">
            <h6><strong>Petunjuk Pemilihan ( Yang sudah punya token )</strong></h6>
            <hr>
            <p>1. Klik Voting</p>
            <p>2. Masukan Token untuk memilih kandidat</p>
            <p>3. <a href="{{ url('hitung_cepat') }}"> Login</a> Untuk melihat perolehan suara secara realtime.</p>
        </div>
    </div>

    <div class="row mt-3 mb-2">
        <div class="col text-center">
            Copyright by <strong>Yuda Muhtar</strong>
        </div>
    </div>
</div>
@endsection
