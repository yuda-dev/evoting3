@extends('layouts.master')

@section('content')
<?php
$jumlahhaksuara = DB::select('SELECT COUNT(username) as jumlah FROM pemilih');
$sudahvoting    = DB::select('SELECT COUNT(status_id) as sudahvoting FROM pemilih WHERE status_id = 1');
$belumvoting   = DB::select('SELECT COUNT(status_id) as jumlahbelumvoting from pemilih where status_id = 2');
?>
    <div class="row" style="margin-top: 20px">
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
                <div class="inner">
                    <h3>{{ count($kandidat) }}</h3>
    
                    <p>Jumlah Kandidat</p>
                </div>
                <div class="icon">
                    <i class="ion ion-stats-bars"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
                <div class="inner">
                    @foreach ($jumlahhaksuara as $hak)
                        <h3>{{ $hak->jumlah }}</h3>
                    @endforeach
                    <p>Jumlah Pemilih</p>
                </div>
                <div class="icon">
                    <i class="ion ion-stats-bars"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
                <div class="inner">
                    @foreach($sudahvoting as $sdv)
                    <h3>{{ $sdv->sudahvoting }}</h3>
                    @endforeach
    
                    <p>Sudah Voting</p>
                </div>
                <div class="icon">
                    <i class="ion ion-pie-graph"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
                <div class="inner">
                    @foreach($belumvoting as $blv)
                    <h3>{{ $blv->jumlahbelumvoting }}</h3>
                    @endforeach
    
                    <p>Belum Voting</p>
                </div>
                <div class="icon">
                    <i class="ion ion-pie-graph"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
    </div>
    <!-- /.row -->
        <div class="panel">
            <div id="chartevoting"></div>
        </div>
    </div>


@endsection

 @section('scripts')
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script>
        Highcharts.chart('chartevoting', {
        chart: {
            type: 'column'
        },
        title: {
            text: 'E-Voting'
        },
        xAxis: {
            categories:{!! json_encode($nama_kandidat) !!}, 
            crosshair: true
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Total Suara'
            }
        },
        tooltip: {
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0
            }
        },
        series: [{
            name: 'Nama Kandidat',
            data: {!! json_encode($jumlah_suara_kandidat) !!},
        }]
    });
    </script>

@endsection

