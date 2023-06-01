@extends('partial.main')

@section('content')
    <div class="content-wrapper" {{-- style="background-image: linear-gradient(to bottom, rgba(207, 247, 227,1), rgba(255,0,0,0));" --}}>
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">KEUANGAN</h1>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->

        <!-- <section class="content"> -->
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row d-flex justify-content-center">
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box" style="background-color: #8292D9">
                        <div class="inner">
                            <h3 class="counter" style="color: white">{{ $paguFormatted }}</h3>

                            <p style="color: white">Total PAGU</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-social-buffer-outline" style="color: white"></i>
                        </div>
                        <!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-4 col-6">
                    <!-- small box -->
                    <div class="small-box" style="background-color: #ECC10C">
                        <div class="inner">
                            <h3 class="counter" style="color: white">{{ $rupiahFormatted }}</h3>

                            <p style="color: white">Realisasi (Rp.)</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-android-checkbox-outline" style="color: white"></i>
                        </div>
                        <!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box" style="background-color: #9BD6E2">
                        <div class="inner">
                            <h3 class="counter" style="color: white">{{ $persen }}
                                <!-- <sup style="font-size: 20px">%</sup> -->
                            </h3>

                            <p style="color: white">Realisasi (%)</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-podium" style="color: white"></i>
                        </div>
                        <!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
                    </div>
                </div>
                <!-- ./col -->
                <!-- ./col -->
            </div>
        </div>


        <div class="container-fluid">

            <!-- BAR CHART -->
            <div class="card ">
                <div class="card-header">
                    <h3 class="card-title">Keuangan UPNYK</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="chart">
                        <canvas id="keuanganChart"
                            style="min-height: 250px; height: 550px; max-height: 550px; max-width: 100%;"></canvas>
                    </div>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->

        </div>
    </div>
@endsection


@include('keuangan.script')
