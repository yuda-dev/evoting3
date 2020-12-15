@extends('layouts.master')

@section('content')
@if (\Auth::user()->role_id == 1)
<div class="row mt-2">
    <div class="col-md-12">
        <div class="box box-warning">
            <!-- general form elements -->
            <div class="card card-outline card-info">
                <div class="card-header">
                    <h3 class="card-title">{{$title}}</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form" method="post" action="{{ url('category/add') }}">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nama Category</label>
                            <input type="text" class="form-control" name="nama" id="exampleInputEmail1"
                                placeholder="Masukan Nama">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@else
@include('layouts.alert')
@endif
@endsection
