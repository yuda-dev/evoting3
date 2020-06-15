
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>MULAI VOTING</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('adminlte/plugins/fontawesome-free/css/all.min.css')}}">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="{{asset('adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('adminlte/dist/css/adminlte.min.css')}}">
</head>
<body class="hold-transition login-page" style="background-image: url('{{ asset('adminlte/bg.jpg')}}'); background-repeat: no-repeat;background-size: cover">
    <section class="content">
        <div class="container-fluid">
            <div class="alert alert-warning">
                <center><img src="{{ asset('adminlte/voting.png') }}" style="height: 150px;width: 180px" alt=""></center><hr>
                <center><h5><i class="icon fas fa-bullhorn"></i> SELAMAT DATANG ! SALAM DEMOKRASI !</h5></center>
                <hr>
                <center><a href="{{ url('user/voting_login') }}" class="btn btn-primary btn-lg"> Mulai Voting</a></center>
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

