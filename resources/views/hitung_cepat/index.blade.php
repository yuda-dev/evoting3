<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>LOGIN</title>
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
        setInterval(function() {
            $(".realtime").load("hitung_cepat").fadeIn("slow");
        }, 2000);
    </script>
</head>
<body style="background-image: url('{{ asset('adminlte/bg.jpg')}}');
 background-repeat: no-repeat;background-size: cover">
 <?php
 $jumlahhaksuara = DB::select('SELECT COUNT(username) as jumlah FROM pemilih');
 $sudahvoting    = DB::select('SELECT COUNT(status_id) as sudahvoting FROM pemilih WHERE status_id = 1');
 $belumvoting   = DB::select('SELECT COUNT(status_id) as jumlahbelumvoting from pemilih where status_id = 2');
 ?>
  <section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <button class="btn btn-warning btn-block" style="margin-top: -46px"><h3>QUICK COUNT <span class="badge badge-danger"> QC</span></h3></button>
            </div>
        </div>
        <div class="realtime" style="margin-top: 30px">
            <div class="row" style="margin-top: 10px">
                @foreach ($kandidat as $key=>$kdt)
                <div class="col-md-4">
                    <!-- Profile Image -->
                    <div class="card card-primary card-outline">
                       <div class="card-body box-profile">
                         <div class="text-center">
                           <img class="profile-user-img img-fluid"
                                src="{{ url('kandidat', $kdt->photo) }}" style="height: 180px;width: 380px"
                                alt="User profile picture">
                         </div><hr>
            
                         <h3 class="profile-username text-center">{{ $kdt->nama }}</h3><hr>
            
                         <h4 class="text-center">No. {{ $key+1 }}</h4><hr>
                         <div class="row">
                             <div class="col-12">
                                 <button class="btn btn-primary btn-block"><b>Jumlah Suara <br><h3>( {{ $kdt->jumlah_suara }} )</h3></b></button>
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
  </section>
 
<!-- jQuery -->
<script src="{{asset('adminlte/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
</body>
</html>

