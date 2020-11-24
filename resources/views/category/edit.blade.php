@extends('layouts.master')

@section('content')
@if (\Auth::user()->role_id == 1)
<div class="row">
    <div class="col-md-12">
        <div class="box box-warning">
            <div class="box-header" style="margin-top: 20px;margin-left: 10px">
                <p>
                    <a href="" class="btn btn-warning btn-refresh"><i class="fa fa-sync"></i> Refresh</a>
                    <a href="{{url('category')}}" class="btn btn-primary"><i class="fa fa-backward"></i> Kembali</a>
                </p>
            </div>
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="card card-outline card-info">
                    <div class="card-header">
                        <h3 class="card-title">{{$title}}</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form role="form" method="post" action="{{ url('category/ubah', $dt->id) }}">
                        @csrf
                        @method('PUT')
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nama Category</label>
                                <input type="text" class="form-control" name="nama" id="exampleInputEmail1"
                                    placeholder="Masukan Nama" value="{{ $dt->nama }}">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@else
@include('layouts.alert')
@endif
@endsection
