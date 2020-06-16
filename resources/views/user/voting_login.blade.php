
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>VOTING LOGIN</title>
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
                @if($message = Session::get('Gagal'))
                    <div class="row">
                        <div class="col">
                            <div class="alert alert-warning">
                                <strong>Gagal!</strong> {{ $message }}.
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </div>
                    </div>
                @endif
                <form method="POST" action="{{ url('cektoken') }}">
                @csrf
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="usertoken" placeholder="Masukan Token" autocomplete="off">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary btn-block"><i class="fa fa-sign"></i> Masuk</button>
                            <a href="{{url('user')}}" class="btn btn-danger btn-block"><i class="fa fa-backward"></i> Kembali</a>
                        </div>
                    </div>
                </form>
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

