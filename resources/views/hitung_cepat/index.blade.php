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

<body style="background-image: url('{{ asset('adminlte/bg.jpg')}}');
 background-repeat: no-repeat;background-size: cover">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <button class="btn btn-warning btn-block" style="margin-top: -46px;border-color : green">
                        <h3>QUICK COUNT <span class="badge badge-danger"> QC</span></h3>
                    </button>
                </div>
            </div>
            <div class="realtime" style="margin-top: 30px">
                <div class="row" style="margin-top: 10px">
                    <div class="col-md-12">
                        <!-- Profile Image -->
                        <div class="card card-primary card-outline">
                            <div class="card-body box-profile" style="border-color: green">
                                @foreach ($kandidat as $key=>$kdt)
                                <hr>
                                <h6>{{ $kdt->nama }}</h6>
                                <p>No. {{ $key+1 }}</p>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="progress">
                                            <div class="progress-bar bg-primary progress-bar-striped" role="progressbar"
                                                aria-valuenow="0" aria-valuemin="0" aria-valuemax="{{ $pemilih }}"
                                                style="width: {{ $kdt->jumlah_suara }}%">
                                                {{ $kdt->jumlah_suara }} %
                                            </div>
                                        </div>
                                        <p class="text-center">Total : {{ $kdt->jumlah_suara }} Suara</p>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- jQuery -->
    <script src="{{asset('adminlte/plugins/jquery/jquery.min.js')}}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{asset('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
</body>

</html>
