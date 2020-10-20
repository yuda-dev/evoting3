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
                                    <p>Silahkan Daftar untuk mendapatkan <strong>Token</strong>.
                                    </p>
                                </center>
                                @endforeach
                                <hr>
                                <p><strong style="color: red">DILARANG KERAS MEMBUAT AKUN GANDA !!!</strong></p>
                                <hr>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body register-card-body">
                                <center><img src="{{ asset('adminlte/voting.png') }}" style="height: 120px;width: 150px"
                                        alt=""></center>
                                <hr>
                                <form method="POST" action="{{ route('register') }}">
                                    @csrf
                                    <div class="input-group mb-3">
                                        <input type="hidden" class="form-controll" value="MEM-{{ date('His')}}"
                                            name="id_member" id="id_member">
                                    </div>
                                    <div class="input-group mb-3">
                                        <input id="name" type="text"
                                            class="form-control @error('name') is-invalid @enderror" name="name"
                                            value="{{ old('name') }}" required autocomplete="off" autofocus
                                            placeholder="Masukan Nama">

                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <div class="input-group mb-3">
                                        <input id="email" type="email"
                                            class="form-control @error('email') is-invalid @enderror" name="email"
                                            value="{{ old('email') }}" required autocomplete="off" autofocus
                                            placeholder="Masukan E-mail">

                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="input-group mb-3">
                                        <input id="password" type="password"
                                            class="form-control @error('password') is-invalid @enderror" name="password"
                                            required autocomplete="off" placeholder="Masukan Password">

                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="input-group mb-3">
                                        <input id="password-confirm" type="password" class="form-control"
                                            name="password_confirmation" required autocomplete="off"
                                            placeholder="Konfirmasi Password">
                                    </div>
                                    <div class="row">
                                        <button type="submit" class="btn btn-primary btn-block">Daftar</button>
                                        <div class="col-8">
                                            <div class="icheck-primary">
                                                <p class="mt-3">Sudah Punya akun? <a href="{{url('login')}}">
                                                        Login</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <!-- /.form-box -->
                            </div><!-- /.card -->
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
                            <p>Silahkan Daftar untuk mendapatkan <strong>Token</strong>.
                            </p>
                        </center>
                        @endforeach
                        <hr>
                        <p class="text-center"><strong style="color: red">DILARANG KERAS MEMBUAT AKUN GANDA !!!</strong>
                        </p>
                        <hr>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body register-card-body">
                                <center><img src="{{ asset('adminlte/voting.png') }}" style="height: 120px;width: 150px"
                                        alt=""></center>
                                <hr>
                                <form method="POST" action="{{ route('register') }}">
                                    @csrf
                                    <div class="input-group mb-3">
                                        <input type="hidden" class="form-controll" value="MEM-{{ date('His')}}"
                                            name="id_member" id="id_member">
                                    </div>
                                    <div class="input-group mb-3">
                                        <input id="name" type="text"
                                            class="form-control @error('name') is-invalid @enderror" name="name"
                                            value="{{ old('name') }}" required autocomplete="off" autofocus
                                            placeholder="Masukan Nama">

                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <div class="input-group mb-3">
                                        <input id="email" type="email"
                                            class="form-control @error('email') is-invalid @enderror" name="email"
                                            value="{{ old('email') }}" required autocomplete="off" autofocus
                                            placeholder="Masukan E-mail">

                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="input-group mb-3">
                                        <input id="password" type="password"
                                            class="form-control @error('password') is-invalid @enderror" name="password"
                                            required autocomplete="off" placeholder="Masukan Password">

                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="input-group mb-3">
                                        <input id="password-confirm" type="password" class="form-control"
                                            name="password_confirmation" required autocomplete="off"
                                            placeholder="Konfirmasi Password">
                                    </div>
                                    <div class="row">
                                        <button type="submit" class="btn btn-primary btn-block">Daftar</button>
                                        <div class="col-8">
                                            <div class="icheck-primary">
                                                <p class="mt-3">Sudah Punya akun? <a href="{{url('login')}}">
                                                        Login</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <!-- /.form-box -->
                            </div><!-- /.card -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
