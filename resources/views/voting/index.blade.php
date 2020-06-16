
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>VOTING PILIH</title>
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
        <center><h5><i class="icon fas fa-users"></i> DAFTAR KANDIDAT </h5></center>
      </div>
    <div class="row" style="margin-top: 3px">
      @foreach ($kandidat as $key=>$kdt)
      <div class="col-md-4">
          <!-- Profile Image -->
          <div class="card card-primary card-outline">
             <div class="card-body box-profile">
               <div class="text-center">
                 <img class="profile-user-img img-fluid"
                      src="{{ url('kandidat', $kdt->photo) }}" style="height: 180px;width: 360px"
                      alt="User profile picture">
               </div><hr>
  
               <h3 class="profile-username text-center">{{ $kdt->nama }}</h3><hr>
  
               <h5 class="text-center">[ No. {{ $key+1 }} ]</h5><hr>
               <div class="row">
                   <div class="col-6">
                       <a href="{{ url('voting/detail', $kdt->id) }}" class="btn btn-primary btn-block"><b><i class="fa fa-list"></i> Detail</b></a>
                   </div>
                   <div class="col-6">
                     <a href="{{ url('simpan_suara', $kdt->id) }}" class="btn btn-success btn-block" style="width:100%" onclick="return confirm('Yakin memilih {{ $kdt->nama}} ?');"><b></b><i class="fa fa-vote-yea"> Pilih</i> </a>
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
  </section>
  
<!-- jQuery -->
<script src="{{asset('adminlte/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('adminlte/dist/js/adminlte.min.js')}}"></script>

</body>
</html>

