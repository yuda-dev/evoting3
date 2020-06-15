
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>VOTING DETAIL KANDIDAT</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('adminlte/plugins/fontawesome-free/css/all.min.css')}}">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="{{asset('adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('adminlte/dist/css/adminlte.min.css')}}">
</head>
<body style="background-image: url('{{ asset('adminlte/bg.jpg')}}');
 background-repeat: no-repeat;background-size: cover">
 <section class="content">
    <div class="container-fluid">
        <div class="alert alert-warning" style="margin-top: 20px">
            <center><h5><i class="icon fas fa-users"></i> DETAIL KANDIDAT </h5></center>
            <hr>
            <div class="row">
                <div class="col-md-3">
                    <center><img src="{{ url('kandidat', $kandidat_detail->photo) }}" alt="" style="height: 200x; width:180px">
                    <hr><h4>{{ $kandidat_detail->nama }}</h4><hr>
                    </center>
                </div>
                <div class="col-md-9">
                    <h5>Visi :</h5>
                    <p>{{ $kandidat_detail->visi }}</p>
                    <hr>
                    <h5>Misi :</h5>
                    <p>{{ $kandidat_detail->misi }}</p>
                    <center> <p class="pul-right"><a href="{{ url('voting') }}" class="btn btn-danger"><i class="fa fa-arrow-left"></i> Kembali</a></p></center>
                </div>
            </div>
        </div>
    </div>
 </section>
 
    
<!-- jQuery -->
<script src="{{asset('adminlte/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('adminlte/dist/js/adminlte.min.js')}}"></script>

</body>
</html>

