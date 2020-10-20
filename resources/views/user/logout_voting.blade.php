
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>VOTING LOGOUT</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('adminlte/plugins/fontawesome-free/css/all.min.css')}}">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="{{asset('adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('adminlte/dist/css/adminlte.min.css')}}">
</head>
<body class="hold-transition login-page" style="background-image: url('{{ asset('adminlte/bg.jpg')}}');
 background-repeat: no-repeat;background-size: cover">

<section class="content">
    <div class="container-fluid">
        <div class="card">
            <div class="card-body login-card-body">
                <center><img src="{{ asset('adminlte/voting.png') }}" style="height: 150px;width: 180px" alt=""></center><hr>
                <center>
                <h5 class="login-box-msg">Terimakasih Sudah Memilih.</h5>
                <h4><a href="{{ url('/') }}" class="btn btn-success"><i class="fa fa-home"></i> Kembali ke Halaman Home</a></h4>
                </center>      
            </div>
        </div>
    </div>
</section>
<script src="{{asset('adminlte/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('adminlte/dist/js/adminlte.min.js')}}"></script>

</body>
</html>

