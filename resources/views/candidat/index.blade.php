@extends('layouts.master')

@section('content')

@if(\Auth::user()->role_id ==1 || \Auth::user()->role_id == 2  )
<br>
<a href="#" class="btn btn-primary" data-toggle="modal" data-target="#addmodal"><i class="fa fa-plus"></i> Tambah</a>
<button class="btn btn-warning btn-refresh"><i class="fa fa-sync"></i></button>
<hr>
<div class="row" style="margin-top: 10px">
    @include('candidat.add')
    @foreach ($kandidat as $key=>$kdt)
    <div class="col-md-4">
        <!-- Profile Image -->
        <div class="card card-primary card-outline">
            <div class="card-body box-profile">
                <div class="text-center">
                    <img src="{{ url('kandidat', $kdt->photo) }}" width="100%" width="200" alt="">
                </div>
                <hr>

                <h3 class="profile-username text-center">{{ $kdt->nama }}</h3>
                <hr>

                <h5 class="text-center"> No. {{ $key+1 }}</h5>
                <hr>
                <div class="row">
                    <div class="col-6">
                        <a href="{{ url('candidat/detail', $kdt->id) }}" class="btn btn-primary btn-block"><b><i
                                    class="fa fa-list"></i> Detail</b></a>
                    </div>
                    <div class="col-6">
                        <a href="{{ url('candidat/hapus', $kdt->id) }}"
                            class="btn btn-danger btn-block btn-hapus"><b></b><i class="fa fa-trash"> Hapus</i> </a>
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
<div class="card-body">
    <div class="alert alert-danger alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <center>
            <h5><i class="icon fas fa-ban"></i> Maaf </h5>
            Halaman yang anda minta tidak ditemukan, ! <br>
            <a href="{{ url('dashboard') }}"> Kembali ke dashboard </a>
        </center>
    </div>
</div>
@endif
@endsection
