@extends('partial.main')

@section('content')
    {{-- {{ dd($status) }} --}}
    <div class="content-wrapper" {{-- style="background-image: linear-gradient(to bottom, rgba(207, 247, 227,1), rgba(255,0,0,0));" --}}>
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Kepegawaian</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
                            <li class="breadcrumb-item active">Kepegawaian</li>
                            <li class="breadcrumb-item active">Tendik</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->

        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">TENDIK</h1>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <div class="container-fluid">
            {{-- <div class="row"> --}}
            {{-- <div class="col-md-6"> --}}

            <!-- BAR CHART -->
            <div class="card ">
                <div class="card-header">
                    <h3 class="card-title">Jumlah Tendik pada tiap Unit</h3>

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
                        <canvas id="tendikJumlahChart"
                            style="min-height: 250px; height: 550px; max-height: 550px; max-width: 100%;"></canvas>
                    </div>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <div class="row">
                <div class="col-md-6">

                    <!-- Jumlah Tendik Berdasarkan Golongan -->
                    <div class="card ">
                        <div class="card-header">
                            <h3 class="card-title">Jumlah Tendik Berdasarkan Golongan</h3>

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
                                <canvas id="tendikGolonganChart"
                                    style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->

                </div>
                <!-- /.col (LEFT) -->

                <div class="col-md-6">

                    <!-- Jumlah Tendik Berdasarkan Status Kepegawaian -->
                    <div class="card ">
                        <div class="card-header">
                            <h3 class="card-title">Jumlah Tendik Berdasarkan Status Kepegawaian</h3>

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
                                <canvas id="tendikStatusChart"
                                    style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;">
                                </canvas>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->

                </div>
                <!-- /.col (RIGHT) -->
            </div>
            <!-- /.row -->

            <!-- Jumlah Tendik Berdasarkan Usia -->
            <div class="card ">
                <div class="card-header">
                    <h3 class="card-title">Jumlah Tendik Berdasarkan Usia</h3>

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
                        <canvas id="tendikUsiaChart"
                            style="min-height: 250px; height: 550px; max-height: 550px; max-width: 100%;">
                        </canvas>
                    </div>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div><!-- /.container-fluid -->

    </div>
@endsection


@include('kepegawaian.tendik_js')
