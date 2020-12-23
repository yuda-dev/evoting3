@extends('frontend.master')

@section('content')
<div class="container">
    <div class="d-none d-md-block">
        <div class="row desktop">
            <div class="col-md-6">
                <div class="d-flex h-100">
                    <div class="justify-content-center align-self-center">
                        @foreach ($logo as $lg)
                        <center>
                            <img src="{{ url('frontend', $lg->photo) }}" width="50%" class="img-brd" alt="">
                        <center>
                                <h5 class="mt-3"><strong>Selamat Datang</strong></h5>
                                <p>Di Sistem E-voting <strong>{{ $lg->nama }}</strong>, silahkan pilih
                                   <strong>"Voting"</strong> Untuk melakukan pemilihan
                                </p>
                                @endforeach
                                <a href="{{ url('user/voting_login') }}" class="btn btn-primary"> <i class="fa fa-archive" aria-hidden="true"></i> Voting</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <img src="{{ asset('frontend/log.svg') }}" width="100%" alt="">
            </div>
        </div>
    </div>

    <div class="sm-block d-md-none">
         <div class="row desktop">
            <div class="col-md-6">
                <div class="d-flex h-100">
                    <div class="justify-content-center align-self-center">
                        @foreach ($logo as $lg)
                        <center>
                            <img src="{{ url('frontend', $lg->photo) }}" width="50%" class="img-brd" alt="">
                        <center>
                                <h5 class="mt-3"><strong>Selamat Datang</strong></h5>
                                <p>Di Sistem E-voting <strong>{{ $lg->nama }}</strong>, silahkan pilih
                                    <strong>"Voting"</strong> Untuk melakukan pemilihan
                                </p>
                                @endforeach
                                <a href="{{ url('user/voting_login') }}" class="btn btn-primary"> <i class="fa fa-archive" aria-hidden="true"></i> Voting</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <img src="{{ asset('frontend/log.svg') }}" width="100%" alt="">
            </div>
        </div>
    </div>

</div>
@endsection
