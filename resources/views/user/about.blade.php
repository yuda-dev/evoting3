@extends('frontend.master')

@section('content')

@php
$about = \App\Logo::all();
@endphp
<div class="container">
    <div class="d-none d-md-block">
        <div class="row about">
            <div class="col-md-6">
                <div class="d-flex h-100">
                    <div class="justify-content-center align-self-center">
                        @foreach ($about as $ab)
                         <img src="{{ url('frontend', $ab->photo) }}" width="50%" class="img-brd" alt="">
                        {!! $ab->about !!}
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <img src="{{ asset('frontend/log.svg') }}" width="100%" alt="">
            </div>
        </div>
    </div>

    <div class="sm-block d-md-none">
        <div class="row about">
            <div class="col-md-6">
                <div class="d-flex h-100">
                    <div class="justify-content-center align-self-center">
                        <center>
                            <img src="{{ asset('frontend/hero2.jpg') }}" width="50%" class="img-brd" alt="">
                        </center>
                        <h1 class="text-center mt-3"><strong>Pilih Kandidat Favoritmu !</strong></h1>
                        <p>Kami membatu anda mempermudah melakukan pemilihan umum berbasis online
                            dengan cepat, mudah, adil dan Jujur. Jadi jangan ragu untuk menggunakan jasa penyewaan kami
                            <br>Hubungi saya untuk melakukan pesanan.
                        </p>
                        <center><a
                                href="https://api.whatsapp.com/send?phone=6289615768153&text=Saya%20tertarik%20untuk%20menyewa%20jas%20e-voting">
                                <img src="{{ asset('frontend/wa.png') }}" width="15%" alt=""></a></center>
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
