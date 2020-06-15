@extends('layouts.master')

@section('content')
<br>
<p>
    <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#addmodal"><i class="fa fa-plus"></i> Tambah</a>
    <a href="#" class="btn btn-danger" data-toggle="modal" data-target="#delmodal"><i class="fa fa-trash"></i> Hapus</a>
    <a href="{{ url('voter/export') }}" class="btn btn-success"><i class="fa fa-file-excel"></i> Export</a>
    <button class="btn btn-warning btn-refresh"><i class="fa fa-sync"></i> </button>
</p>
<hr>
<div class="row">
  <div class="col-md-12">
      <div class="box box-warning">
          <div class="card">
              <div class="card-header" style="background-color: var(--blue);color: white">
                  <h3 class="card-title">{{$title}}</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                  <div class="table table-responsive">
                      <table id="example1" class="table table-bordered table-striped">
                          <thead>
                          <tr>
                              <th>No</th>
                              <th>Token</th>
                              <th>Status</th>
                          </tr>
                          </thead>
                          <tbody>
                          @foreach($data as $key=>$dt)
                          <tr>
                              <td>{{$key+1}}</td>
                              <td>{{$dt->username}}</td>
                              <td>{{$dt->status->nama}}</td>
                          </tr>
                          @endforeach
                          </tbody>
                          <tfoot>
                          <tr>
                            <th>No</th>
                            <th>Token</th>
                            <th>Status</th>
                          </tr>
                          </tfoot>
                      </table>
                  </div>
              </div>
              <!-- /.card-body -->
          </div>
          <!-- /.card -->
      </div>
  </div>
  @include('voter.hapus')
</div>
@include('voter.add')
@endsection
