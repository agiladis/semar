@extends('partial.main')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">HOME</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                        <li class="breadcrumb-item active">Home</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->

    <!-- <section class="content"> -->
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>970</h3>

                        <p>DOSEN</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-ios-people"></i>
                    </div>
                    <!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-success">
                    <div class="inner">
                        <h3>20553
                            <!-- <sup style="font-size: 20px">%</sup> -->
                        </h3>

                        <p>MAHASISWA</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-android-people"></i>
                    </div>
                    <!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-warning">
                    <div class="inner">
                        <h3>258</h3>

                        <p>LULUSAN 2023</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-android-checkbox-outline"></i>
                    </div>
                    <!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-danger">
                    <div class="inner">
                        <h3>78912</h3>

                        <p>PEMINAT 2022</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person-add"></i>
                    </div>
                    <!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
                </div>
            </div>
            <!-- ./col -->
        </div>
    </div>
    <!-- /.row -->
    <hr>
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Data Mahasiswa</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">

                <!-- BAR CHART -->
                <div class="card ">
                    <div class="card-header">
                        <h3 class="card-title">Jumlah Mahasiswa Berdasarkan Tahun Angkatan</h3>

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
                            <canvas id="bytahunChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->

                <!-- PIE CHART -->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Berdasarkan Jenjang</h3>

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
                        <canvas id="pieChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->

            </div>
            <!-- /.col (LEFT) -->

            <div class="col-md-6">

                <!-- DONUT CHART -->
                <div class="card ">
                    <div class="card-header">
                        <h3 class="card-title">Sebaran Mahasiswa Berdasarkan Fakultas</h3>

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
                            <canvas id="byfakultasChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->

                <!-- STACKED BAR CHART -->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Jumlah Peminat</h3>

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
                            <canvas id="stackedBarChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->

            </div>
            <!-- /.col (RIGHT) -->
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->

    <hr>
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Data Dosen</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">

                <!-- PIE CHART -->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Berdasarkan Jenjang Pendidikan Tertinggi</h3>

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
                        <canvas id="dosenjenjangChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->

                <!-- PIE CHART -->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Berdasarkan Status Kepegawaian</h3>

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
                        <canvas id="dosenstatusChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->

            </div>

            <div class="col-md-6">

                <!-- PIE CHART -->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Berdasarkan Jabatan Fungsional</h3>

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
                        <canvas id="dosenjabatanChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->

                <!-- Dosen Fakultas CHART -->
                <div class="card ">
                    <div class="card-header">
                        <h3 class="card-title">Sebaran Dosen Berdasarkan Fakultas</h3>

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
                            <canvas id="dosenfakultasChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->

            </div>
        </div>
    </div>

    <!-- </section> -->
    <!-- /.content -->
</div>

@endsection



@section('js')

<script>
    $(function() {

        //-------------
        //- By Tahun CHART -
        //-------------

        var donutChartData = {
            labels: ['2016', '2017', '2018', '2019', '2020', '2021', '2022'],
            datasets: [{
                // label: 'Digital Goods',
                backgroundColor: 'rgba(60,141,188,0.9)',
                borderColor: 'rgba(60,141,188,0.8)',
                pointRadius: false,
                pointColor: '#3b8bba',
                pointStrokeColor: 'rgba(60,141,188,1)',
                pointHighlightFill: '#fff',
                pointHighlightStroke: 'rgba(60,141,188,1)',
                data: [3065, 2408, 3125, 3169, 3603, 3785, 4463]
            }, ]
        }

        var barChartCanvas = $('#bytahunChart').get(0).getContext('2d')
        var barChartData = $.extend(true, {}, donutChartData)
        var temp0 = donutChartData.datasets[0]
        // var temp1 = donutChartData.datasets[1]
        barChartData.datasets[0] = temp0
        // barChartData.datasets[1] = temp1

        var barChartOptions = {
            responsive: true,
            maintainAspectRatio: false,
            datasetFill: false,
            layout: {
                padding: 20
            },
            legend: {
                display: false
            },
            plugins: {
                labels: {
                    render: 'value',
                }
            }
        }

        new Chart(barChartCanvas, {
            type: 'bar',
            data: barChartData,
            options: barChartOptions
        })

        //-------------
        //- By Fakultas CHART -
        //-------------

        var byfakultasChartData = {
            labels: ['FEB', 'FISIP', 'FP', 'FTI', 'FTM'],
            datasets: [{
                // label: 'Digital Goods',
                backgroundColor: 'rgba(60,141,188,0.9)',
                borderColor: 'rgba(60,141,188,0.8)',
                pointRadius: false,
                pointColor: '#3b8bba',
                pointStrokeColor: 'rgba(60,141,188,1)',
                pointHighlightFill: '#fff',
                pointHighlightStroke: 'rgba(60,141,188,1)',
                data: [5761, 4224, 2977, 4374, 6215]
            }, ]
        }

        var pakChartCanvas = $('#byfakultasChart').get(0).getContext('2d')
        var pakChartData = $.extend(true, {}, byfakultasChartData)

        var temp0 = byfakultasChartData.datasets[0]
        // var temp1 = byfakultasChartData.datasets[1]
        pakChartData.datasets[0] = temp0
        // pakChartData.datasets[1] = temp1

        var barChartOptions = {
            responsive: true,
            maintainAspectRatio: false,
            datasetFill: false,
            layout: {
                padding: 20
            },
            legend: {
                display: false
            },
            plugins: {
                labels: {
                    render: 'value',
                }
            }
        }

        new Chart(pakChartCanvas, {
            type: 'bar',
            data: pakChartData,
            options: barChartOptions
        })

        //-------------
        //- PIE CHART -
        //-------------
        // Get context with jQuery - using jQuery's .get() method.

        var donutData = {
            labels: [
                'D3',
                'S1',
                'S2',
                'S3',
            ],
            datasets: [{
                data: [368, 18941, 1168, 22],
                backgroundColor: ['#f56954', '#00a65a', '#f39c12', '#00c0ef'],
            }]
        }

        var pieChartCanvas = $('#pieChart').get(0).getContext('2d')
        var pieData = donutData;
        var pieOptions = {
            maintainAspectRatio: false,
            responsive: true,
            layout: {
                // autoPadding: true,
                padding: 25,
            },
            plugins: {
                legend: true,
                outlabels: {
                    text: '%l %p',
                    color: 'white',
                    stretch: 2,
                    font: {
                        resizable: true,
                        minSize: 10,
                        maxSize: 20
                    }
                },
                labels: {
                    render: 'value',
                    fontColor: 'white'
                }
            }
        }
        //Create pie or douhnut chart
        // You can switch between pie and douhnut using the method below.
        new Chart(pieChartCanvas, {
            type: 'pie',
            data: pieData,
            options: pieOptions
        })

        //---------------------
        //- STACKED BAR CHART -
        //---------------------

        var peminatChartData = {
            labels: ['2016', '2017', '2018', '2019', '2020', '2021', '2022'],
            datasets: [{
                    label: 'Peminat SBMPTN',
                    backgroundColor: 'rgba(60,141,188,0.9)',
                    borderColor: 'rgba(60,141,188,0.8)',
                    pointRadius: false,
                    pointColor: '#3b8bba',
                    pointStrokeColor: 'rgba(60,141,188,1)',
                    pointHighlightFill: '#fff',
                    pointHighlightStroke: 'rgba(60,141,188,1)',
                    data: [3065, 2048, 3125, 3169, 3603, 3785, 4463]
                },
                {
                    label: 'Peminat SM',
                    backgroundColor: 'rgba(12,213,113,0.9)',
                    borderColor: 'rgba(255,255,255,0.8)',
                    pointRadius: false,
                    pointColor: '#00a65a',
                    pointStrokeColor: 'rgba(60,141,188,1)',
                    pointHighlightFill: '#fff',
                    pointHighlightStroke: 'rgba(60,141,188,1)',
                    data: [7418, 6124, 9871, 7811, 8124, 4783, 9014]
                },

            ]
        }

        var stackedBarChartCanvas = $('#stackedBarChart').get(0).getContext('2d')
        var stackedBarChartData = $.extend(true, {}, peminatChartData)

        var stackedBarChartOptions = {
            responsive: true,
            maintainAspectRatio: false,
            scales: {
                xAxes: [{
                    stacked: true,
                }],
                yAxes: [{
                    stacked: true
                }]
            },

        }

        new Chart(stackedBarChartCanvas, {
            type: 'bar',
            data: stackedBarChartData,
            options: stackedBarChartOptions
        })

        //-------------
        //- Dosen Jenjang CHART -
        //-------------
        // Get context with jQuery - using jQuery's .get() method.

        var donutData = {
            labels: [
                'Sp',
                'S2',
                'S3',
            ],
            datasets: [{
                data: [6, 330, 142],
                backgroundColor: ['#f56954', '#00a65a', '#f39c12', '#00c0ef'],
            }]
        }

        var pieChartCanvas = $('#dosenjenjangChart').get(0).getContext('2d')
        var pieData = donutData;
        var pieOptions = {
            maintainAspectRatio: false,
            responsive: true,
            layout: {
                padding: 20
            },
            plugins: {
                legend: false,
                outlabels: {
                    text: '%l %p',
                    color: 'white',
                    stretch: 10,
                    font: {
                        resizable: true,
                        minSize: 12,
                        maxSize: 20
                    }
                },
                labels: {
                    render: 'value',
                    fontColor: 'white'
                }
            }
        }
        //Create pie or douhnut chart
        // You can switch between pie and douhnut using the method below.
        new Chart(pieChartCanvas, {
            type: 'pie',
            data: pieData,
            options: pieOptions
        })

        //-------------
        //- Dosen Jabatan CHART -
        //-------------
        // Get context with jQuery - using jQuery's .get() method.

        var dosenjabatanData = {
            labels: [
                'Profesor',
                'Lektor Kepala',
                'Tenaga Pengajar',
                'Asisten Ahli',
                'Lektor',
                // 'N/A',
            ],
            datasets: [{
                data: [96, 270, 165, 213, 392],
                backgroundColor: ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#aba227'],
            }]
        }

        var pieChartCanvas = $('#dosenjabatanChart').get(0).getContext('2d')
        var pieData = dosenjabatanData;
        var pieOptions = {
            maintainAspectRatio: false,
            responsive: true,
            layout: {
                padding: 20
            },
            plugins: {
                legend: false,
                outlabels: {
                    text: '%l %p',
                    color: 'white',
                    stretch: 10,
                    font: {
                        resizable: true,
                        minSize: 12,
                        maxSize: 20
                    }
                },
                labels: {
                    render: 'value',
                    fontColor: 'white'
                }
            }
        }

        //Create pie or douhnut chart
        // You can switch between pie and douhnut using the method below.
        new Chart(pieChartCanvas, {
            type: 'doughnut',
            data: pieData,
            options: pieOptions
        })

        //-------------
        //- Dosen Status CHART -
        //-------------
        // Get context with jQuery - using jQuery's .get() method.

        var dosenjabatanData = {
            labels: [
                'Kontrak',
                'BLU',
                'PNS',
            ],
            datasets: [{
                data: [64, 7, 1064],
                backgroundColor: ['#f56954', '#00a65a', '#00c0ef', '#f39c12', '#aba227'],
            }]
        }

        var pieChartCanvas = $('#dosenstatusChart').get(0).getContext('2d')
        var pieData = dosenjabatanData;
        var pieOptions = {
            maintainAspectRatio: false,
            responsive: true,
            layout: {
                padding: 12
            },
            plugins: {
                legend: true,
                outlabels: {
                    text: '%l %p',
                    color: 'white',
                    stretch: 10,
                    font: {
                        resizable: true,
                        minSize: 12,
                        maxSize: 20
                    },
                    // zoomOutPercentage: 10,
                },
                labels: {
                    render: 'value',
                    fontColor: 'white'
                }
            }
        }

        //Create pie or douhnut chart
        // You can switch between pie and douhnut using the method below.
        new Chart(pieChartCanvas, {
            type: 'pie',
            data: pieData,
            options: pieOptions
        })

        //-------------
        //- Dosen Fakultas CHART -
        //-------------

        var dosenfakultasChartData = {
            labels: ['FEB', 'FISIP', 'FP', 'FTI', 'FTM'],
            datasets: [{
                // label: 'Digital Goods',
                backgroundColor: 'rgba(60,141,188,0.9)',
                borderColor: 'rgba(60,141,188,0.8)',
                pointRadius: false,
                pointColor: '#3b8bba',
                pointStrokeColor: 'rgba(60,141,188,1)',
                pointHighlightFill: '#fff',
                pointHighlightStroke: 'rgba(60,141,188,1)',
                data: [177, 169, 112, 178, 325]
            }, ]
        }

        var pakChartCanvas = $('#dosenfakultasChart').get(0).getContext('2d')
        var pakChartData = $.extend(true, {}, dosenfakultasChartData)

        var temp0 = dosenfakultasChartData.datasets[0]
        // var temp1 = dosenfakultasChartData.datasets[1]
        pakChartData.datasets[0] = temp0
        // pakChartData.datasets[1] = temp1

        var barChartOptions = {
            responsive: true,
            maintainAspectRatio: false,
            datasetFill: false,
            layout: {
                padding: 20
            },
            legend: {
                display: false
            },
            plugins: {
                labels: {
                    render: 'value',
                }
            }
        }

        new Chart(pakChartCanvas, {
            type: 'bar',
            data: pakChartData,
            options: barChartOptions
        })


    })
</script>

@endsection