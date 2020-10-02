@extends('layouts.master')

@section('content')
    @if (\Auth::user()->role_id == 1 || \Auth::user()->role_id == 2)
    <?php
    $jumlahhaksuara = DB::select('SELECT COUNT(username) as jumlah FROM pemilih');
    $sudahvoting    = DB::select('SELECT COUNT(status_id) as sudahvoting FROM pemilih WHERE status_id = 1');
    $belumvoting   = DB::select('SELECT COUNT(status_id) as jumlahbelumvoting from pemilih where status_id = 2');
    ?>
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
                        @foreach ($jumlahhaksuara as $hak)
                            <h3>{{ $hak->jumlah }}</h3>
                        @endforeach
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
                        @foreach($sudahvoting as $sdv)
                        <h3>{{ $sdv->sudahvoting }}</h3>
                        @endforeach
        
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
                        @foreach($belumvoting as $blv)
                        <h3>{{ $blv->jumlahbelumvoting }}</h3>
                        @endforeach
        
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
        <!-- /.row -->
            <div class="panel">
                <div id="chartevoting"></div>
            </div>
        </div>
    @else
        <div class="container">
            <center>
            <div>
                @if (\Auth::user()->status_pilih == 1)
                <form role="form" enctype="multipart/form-data" method="post" action="{{url('user/voter/tambah')}}">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <input type="text" class="form-control" value="1" name="jumlah" id="exampleInputEmail1" hidden placeholder="Masukan Jumlah Pemilih" autocomplete="off">
                        </div>
                        <button type="submit" class="btn btn-primary">Buat Token</button>
                    </div>
                </form>
                @else
                    <div class="alert alert-warning mt-4">
                        <strong>Hallo {{\Auth::user()->name}} !! <br> Maaf anda tidak dapat membuat token lagi. Terimakasih</strong>
                    </div>
                    <form>
                            <div class="form-group">
                                <h3> Token : <br> <br>
                                @foreach ($pemilih as $item)
                            <input type="text" class="form-control center" autocomplete="off" value="{{$item->username}}">
                            </div>
                                @endforeach
                            </h3>
                            <p>Silahkan Copy Token di atas untuk melakukan pemilihan </p>
                            <a class="btn btn-primary mt-3" href="{{ url('/') }}"> Klik Disini Untuk Memilih</a>
                            <hr>
                            </div>
                    </form>
                @endif
            </div>
            <center>
        </div>
        
    @endif
@endsection
