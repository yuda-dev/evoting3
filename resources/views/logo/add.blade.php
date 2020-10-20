@extends('layouts.master')

@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="box box-warning">
            <div class="box-header" style="margin-top: 20px;margin-left: 10px">
                <p>
                    <a href="" class="btn btn-warning btn-refresh"><i class="fa fa-refresh"></i> Refresh</a>
                </p>
                <hr>
            </div>
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="card card-outline card-info">
                    <div class="card-header">
                        <h3 class="card-title">{{$title}}</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form role="form" method="post" action="{{ url('logo/update', $dt->id) }}"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nama Sekolah / Instansi</label>
                                <input type="text" class="form-control" name="nama" id="exampleInputEmail1"
                                    value="{{ $dt->nama }}" placeholder="Masukan Nama Sekolah / Instansi">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">File input</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="photo" id="exampleInputFile">
                                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <hr>
                            <h5 class="mt-2">Preview</h5>
                            <img src="{{ url('frontend', $dt->photo) }}" alt="">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
