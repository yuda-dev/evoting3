@extends('layouts.master')

@section('content')
<br>
<a href="{{url('candidat')}}" class="btn btn-danger"><i class="fa fa-arrow-left"></i> Kembali</a>
<button class="btn btn-warning btn-refresh"><i class="fa fa-spinner"></i> Refresh</button>
<hr>
    <!-- Main content -->
    <section class="content"  style="margin-top : 20px">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-3">
  
              <!-- Profile Image -->
              <div class="card card-primary card-outline">
                <div class="card-body box-profile">
                  <div class="text-center">
                    <img class="profile-user-img img-fluid img-circle"
                         src="{{ url('kandidat', $detail->photo) }}"
                         alt="User profile picture" style="height: 150px; width: 140px">
                  </div>
  
                  <h3 class="profile-username text-center">{{$detail->nama}}</h3>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <!-- /.col -->
            <div class="col-md-9">
              <div class="card card-primary card-outline">
                <div class="card-header p-2">
                  <ul class="nav nav-pills">
                    <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Visi & Misi</a></li>
                    <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Edit Kandidat</a></li>
                  </ul>
                </div><!-- /.card-header -->
                <div class="card-body">
                  <div class="tab-content">
                    <div class="active tab-pane" id="activity">
                      <!-- Post -->
                      <div class="post">
                       <h4>Visi :</h4>
                       <h6>{{ $detail->visi }}</h6>
                      <hr>
                      <h4> Misi :</h4>
                      <h6>{{ $detail->misi }}</h6>
                      </div>
                      <!-- /.post -->
                    </div>
                    <!-- /.tab-pane -->
                    <div class="tab-pane" id="timeline">
                       <!-- Post -->
                    <div class="post">
                        <form role="form" enctype="multipart/form-data" method="post" action="{{url('candidat/edit', $detail->id)}}">
                          @csrf
                          @method('PUT')
                           <div class="input-group mb-3">
                               <input id="nama" type="text" class="form-control @error('nama') is-invalid @enderror"
                                      name="nama" value="{{$detail->nama}}" required autocomplete="off" autofocus placeholder="Masukan Nama">
                               <div class="input-group-append">
                                   <div class="input-group-text">
                                       <span class="fas fa-user"></span>
                                   </div>
                               </div>
                           </div>
                           <div class="input-group mb-3">
                               <input type="file" class="form-controll" name="photo"  style="margin-bottom: 13px">
                            </div>
                            <div class="input-group mb-3">
                                <textarea name="visi" id="" cols="100" rows="4">{{ $detail->visi }}</textarea>
                             </div>
                             <div class="input-group mb-3">
                                <textarea name="misi" id="" cols="100" rows="4">{{ $detail->misi }}</textarea>
                             </div>

                            <button type="submit" class="btn btn-primary btn-block">Edit</button>
                      </form>
                      </div>
                      <!-- /.post -->
                    </div>
                    <!-- /.tab-pane -->
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
@endsection