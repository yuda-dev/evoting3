<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Quick Count</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('adminlte/plugins/fontawesome-free/css/all.min.css')}}">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="{{asset('adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('adminlte/dist/css/adminlte.min.css')}}">
    <script src="https://code.jquery.com/jquery-3.1.1.js" type="text/javascript"></script>
    <script>
        setInterval(function () {
            $(".realtime").load("hitung_cepat").fadeIn("slow");
        }, 2000);

    </script>
</head>

@php
$pemilih = \App\Pemilih::where('username')->count();
@endphp

<body style="background-image: url('{{ asset('frontend/bg.png')}}');
 background-repeat: no-repeat;background-size: cover">

    <section class="content">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <button class="btn btn-warning btn-block" style="margin-top: -46px;border-color : green">
                        <h3>QUICK COUNT <span class="badge badge-danger"> QC</span></h3>
                    </button>
                </div>
            </div>
            @if (\Auth::user()->status_pilih == 2)
            <div class="realtime" style="margin-top: 30px">
                <div class="row" style="margin-top: 10px">
                    @foreach ($kandidat as $key=>$kdt)
                    <div class="col-md-4">
                        <!-- Profile Image -->
                        <div class="card card-primary card-outline">
                            <div class="card-body box-profile" style="border-color: green">
                                <p class="text-center">{{ $key+1 }}</p>
                                <hr>
                                <div class="text-center">
                                    <img src="{{ url('kandidat', $kdt->photo) }}" width="100%" alt="">
                                </div>
                                <hr>
                                <h6 class="text-center">{{ $kdt->nama }}</h6>
                                <hr>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="progress">
                                            <div class="progress-bar bg-primary progress-bar-striped" role="progressbar"
                                                aria-valuenow="0" aria-valuemin="0" aria-valuemax="{{ $pemilih }}"
                                                style="width: {{ $kdt->jumlah_suara }}%">
                                                {{ $kdt->jumlah_suara }} Suara
                                            </div>
                                        </div>
                                        <p class="text-center"> Total : {{ $kdt->jumlah_suara }} Suara</p>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        @else
        <div class="card" style="margin-top:30px">
            <div class="card-body">
                <p class="text-center">Maaf untuk melihat perhitungan suara secara Realtime anda harus membuat Token
                    terlebih dahulu !!
                    Silahlan <a href="{{ url('login') }}"> LOGIN </a> untuk mendapatkan token.
                </p>
            </div>
        </div>
    </section>


    @endif

    <!-- jQuery -->
    <script src="{{asset('adminlte/plugins/jquery/jquery.min.js')}}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{asset('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
</body>

</html>
