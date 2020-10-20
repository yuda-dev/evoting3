
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
         <!-- Main content -->
    <section class="content"  style="margin-top : 20px">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-3">
  
              <!-- Profile Image -->
              <div class="card card-primary card-outline">
                <div class="card-body box-profile">
                  <div class="text-center">
                    <img src="{{ url('kandidat', $kandidat_detail->photo) }}"
                         alt="" width="100%">
                  </div><hr>
                  <h3 class="profile-username text-center">{{$kandidat_detail->nama}}</h3><hr>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <!-- /.col -->
            <div class="col-md-9">
              <div class="card card-primary card-outline">
                <div class="card-header p-2">
                </div><!-- /.card-header -->
                <div class="card-body">
                  <div class="tab-content">
                    <div class="active tab-pane" id="activity">
                      <!-- Post -->
                      <div class="post">
                       <h4>Visi :</h4>
                       <div class="form-group">
                        {!! $kandidat_detail->visi !!}
                       </div>
                      <hr>
                      <h4> Misi :</h4>
                      <div class="form-group">
                       {!! $kandidat_detail->misi !!}
                       </div>
                      </div>
                      <center><a href="{{url('voting')}}" class="btn btn-danger"><i class="fa fa-backward"></i></a></center>
                      <!-- /.post -->
                    </div>
                  </div>
                  <!-- /.tab-content -->
                </div><!-- /.card-body -->
              </div>
              <!-- /.nav-tabs-custom -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
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

