@extends('layouts.master')

@section('content')
<br>
<a href="#" class="btn btn-primary" data-toggle="modal" data-target="#addmodal"><i class="fa fa-plus"></i> Tambah</a>
<button class="btn btn-warning btn-refresh"><i class="fa fa-sync"></i></button>
<hr>
<div class="row" style="margin-top: 10px">
    @include('candidat.add')
    @foreach ($kandidat as $key=>$kdt)
    <div class="col-md-4">
        <!-- Profile Image -->
        <div class="card card-primary card-outline">
           <div class="card-body box-profile">
             <div class="text-center">
               <img class="profile-user-img img-fluid"
                    src="{{ url('kandidat', $kdt->photo) }}" style="height: 130;width: 140px"
                    alt="User profile picture">
             </div>

             <h3 class="profile-username text-center">{{ $kdt->nama }}</h3>

             <h6 class="text-center">Calon No. {{ $key+1 }}</h6>
             <div class="row">
                 <div class="col-6">
                     <a href="{{ url('candidat/detail', $kdt->id) }}" class="btn btn-primary btn-block"><b><i class="fa fa-list"></i> Detail</b></a>
                 </div>
                 <div class="col-6">
                   <a href="{{ url('candidat/hapus', $kdt->id) }}" class="btn btn-danger btn-block btn-hapus"><b></b><i class="fa fa-trash"> Hapus</i> </a>
                 </div>
             </div>
           </div>
           <!-- /.card-body -->
         </div>
         <!-- /.card -->
   </div> 
    @endforeach
    
</div>
@endsection
