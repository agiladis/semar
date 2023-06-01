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
                            <li class="breadcrumb-item active">Dosen</li>
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
                        <h1 class="m-0">DOSEN</h1>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <div class="container-fluid">
            {{-- <div class="row"> --}}
            {{-- <div class="col-md-6"> --}}

            <div class="row">
                <div class="col-md-6">

                    <!-- Jumlah Dosen Berdasarkan Jenjang Pendidikan Tertinggi -->
                    <div class="card ">
                        <div class="card-header">
                            <h3 class="card-title">Jumlah Dosen Berdasarkan Jenjang Pendidikan Tertinggi</h3>

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
                                <canvas id="dosenJenjangChart"
                                    style="min-height: 250px; height: 350px; max-height: 350px; max-width: 100%;"></canvas>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->

                    <!-- Jumlah Dosen Berdasarkan Status Kepegawaian -->
                    <div class="card ">
                        <div class="card-header">
                            <h3 class="card-title">Jumlah Dosen Berdasarkan Status Kepegawaian</h3>

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
                                <canvas id="dosenStatusChart"
                                    style="min-height: 250px; height: 350px; max-height: 350px; max-width: 100%;"></canvas>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->

                    <!-- Jumlah Dosen Berdasarkan Jenis Kelamin -->
                    <div class="card ">
                        <div class="card-header">
                            <h3 class="card-title">Jumlah Dosen Berdasarkan Jenis Kelamin</h3>

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
                                <canvas id="dosenKelaminChart"
                                    style="min-height: 250px; height: 350px; max-height: 350px; max-width: 100%;"></canvas>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->

                </div>
                <!-- /.col (LEFT) -->

                <div class="col-md-6">

                    <!-- Jumlah Dosen Berdasarkan Jabatan Fungsional -->
                    <div class="card ">
                        <div class="card-header">
                            <h3 class="card-title">Jumlah Dosen Berdasarkan Jabatan Fungsional</h3>

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
                                <canvas id="dosenJabatanChart"
                                    style="min-height: 250px; height: 350px; max-height: 350px; max-width: 100%;">
                                </canvas>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->

                    <!-- Jumlah Dosen Berdasarkan Fakultas -->
                    <div class="card ">
                        <div class="card-header">
                            <h3 class="card-title">Jumlah Dosen Berdasarkan Fakultas</h3>

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
                                <canvas id="dosenFakultasChart"
                                    style="min-height: 250px; height: 350px; max-height: 350px; max-width: 100%;">
                                </canvas>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->

                    <!-- Jumlah Dosen Berdasarkan Status Studi Lanjut -->
                    <div class="card ">
                        <div class="card-header">
                            <h3 class="card-title">Jumlah Dosen Berdasarkan Status Studi Lanjut</h3>

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
                                <canvas id="dosenStudiChart"
                                    style="min-height: 250px; height: 350px; max-height: 350px; max-width: 100%;">
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
                    <h3 class="card-title">Jumlah Dosen Berdasarkan Usia</h3>

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
                        <canvas id="dosenUsiaChart"
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


@include('kepegawaian.dosen_js')
