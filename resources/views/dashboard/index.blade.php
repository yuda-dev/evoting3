@extends('layouts.master')

@section('content')

@if (\Auth::user()->role_id == 1 || \Auth::user()->role_id == 2)

@php
$jumlahhaksuara = \App\Pemilih::count();
$sudahvoting = \App\Pemilih::where('status_id', 1)->count();
$belumvoting = \App\Pemilih::where('status_id', 2)->count();
@endphp

<div class="row" style="margin-top: 20px">
    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-info">
            <div class="inner">
                <h3>{{ count($kandidat) }}</h3>

                <p>Jumlah Kandidat</p>
            </div>
            <div class="icon">
                <i class="ion ion-stats-bars"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-success">
            <div class="inner">
                <h3>{{ $jumlahhaksuara }}</h3>
                <p>Jumlah Pemilih</p>
            </div>
            <div class="icon">
                <i class="ion ion-stats-bars"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-warning">
            <div class="inner">
                <h3>{{ $sudahvoting }}</h3>
                <p>Sudah Voting</p>
            </div>
            <div class="icon">
                <i class="ion ion-pie-graph"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-danger">
            <div class="inner">
                <h3>{{ $belumvoting }}</h3>
                <p>Belum Voting</p>
            </div>
            <div class="icon">
                <i class="ion ion-pie-graph"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
</div>

<div class="row" style="margin-top: 10px">
    @foreach ($kandidat as $key=>$kdt)
    <div class="col-md-4">
        <!-- Profile Image -->
        <div class="card card-primary card-outline">
            <div class="card-body box-profile">
                <div class="text-center">
                    <img src="{{ url('kandidat', $kdt->photo) }}" width="100%" alt="">
                </div>
                <hr>

                <h3 class="profile-username text-center">{{ $kdt->nama }}</h3>
                <hr>

                <h4 class="text-center">No. {{ $key+1 }}</h4>
                <hr>
                <div class="row">
                    <div class="col-12">
                        <button class="btn btn-primary btn-block"><b>Jumlah Suara <br>
                                <h3>( {{ $kdt->jumlah_suara }} )</h3>
                            </b></button>
                    </div>
                </div>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    @endforeach
</div>
@else
<div class="container">
    <center>
        @if (\Auth::user()->status_pilih == 1)
        <form role="form" enctype="multipart/form-data" method="post" action="{{url('user/voter/tambah')}}">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <input type="text" class="form-control" value="1" name="jumlah" id="exampleInputEmail1" hidden
                        placeholder="Masukan Jumlah Pemilih" autocomplete="off">
                </div>
                <div class="alert alert-default mt-4" style="border-color: green">
                    <p><strong>Selamat Datang, <strong>{{ \Auth::user()->name }}</strong>. <br>Silahkan klik tombol "
                            Buat Token " di bawah ini untuk mendapatkan <br> Token pemilihan </strong></p>

                    <button type="submit" class="btn btn-primary btn-block btn-lg">Buat Token</button>
                </div>
            </div>
        </form>
        @endif

        @if(\Auth::user()->status_pilih == 2)
        <div class="alert alert-default mt-4" style="border-color: red">
            <strong>Hallo {{\Auth::user()->name}} !! <br> Maaf anda tidak dapat membuat token lagi.
                Terimakasih</strong>
            <form>
                <div class="form-group">
                    <h3> Token : <br> <br>
                        @foreach ($pemilih as $item)
                        <input type="text" class="form-control center" autocomplete="off" value="{{$item->username}}">
                </div>
                @endforeach
                </h3>
                <p>Silahkan Copy Token di atas untuk melakukan pemilihan </p>
                <a class="btn btn-primary mt-3" href="{{ url('user/voting_login') }}"> Klik Disini Untuk Memilih</a>
                <hr>
            </form>
        </div>
        @endif

        @if (\Auth::user()->status_pilih == 0)
            <div class="alert alert-danger mt-5">
                <h3> Maaf {{ \Auth::user()->name }}, Akun Anda belum di verifikasi oleh Admin. <br>
                Tunggu Beberapa saat lagi</h3>

                <a href="{{ url('/keluar') }}" class="btn btn-primary"> Logout</a>
            </div>
        @endif

        <center>
</div>

@endif
@endsection
