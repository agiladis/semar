@section('js')
    <script>
        jQuery(document).ready(function($) {
            $('.counter').counterUp({
                delay: 10,
                time: 1000
            });
        });

        $(function() {

            tahunChart();
            // setTimeout(() => {
            mhsfakultasChart();
            // }, 0);
            mhsjenjangChart();


            dsnJenjangChart();
            dsnFakultasChart();

            //---------------------
            //- Peminat CHART -
            //---------------------

            var peminatChartData = {
                labels: ['2016', '2017', '2018', '2019', '2020', '2021', '2022'],
                datasets: [{
                        label: 'Peminat SBMPTN',
                        backgroundColor: '#DCFCFA',
                        borderColor: 'rgba(60,141,188,0.8)',
                        pointRadius: false,
                        pointColor: '#3b8bba',
                        pointStrokeColor: 'rgba(60,141,188,1)',
                        pointHighlightFill: '#fff',
                        pointHighlightStroke: 'rgba(60,141,188,1)',
                        data: [3065, 2048, 3125, 3169, 3603, 3785, 4463]
                    },
                    {
                        label: 'Peminat SNMPTN',
                        backgroundColor: '#B5E8ED',
                        borderColor: 'rgba(255,255,255,0.8)',
                        pointRadius: false,
                        pointColor: '#FFE344',
                        pointStrokeColor: 'rgba(60,141,188,1)',
                        pointHighlightFill: '#fff',
                        pointHighlightStroke: 'rgba(60,141,188,1)',
                        data: [7418, 6124, 9871, 7811, 8124, 4783, 9014]
                    },
                    {
                        label: 'Peminat SM',
                        backgroundColor: '#71AEC2',
                        borderColor: 'rgba(255,255,255,0.8)',
                        pointRadius: false,
                        pointColor: '#FFE344',
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
                plugins: {
                    labels: {
                        render: 'value',
                    }
                }

            }

            new Chart(stackedBarChartCanvas, {
                type: 'bar',
                data: stackedBarChartData,
                options: stackedBarChartOptions
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
                    backgroundColor: ['#B9C6F3', '#A2B0E8', '#8292D9', '#5F6EBA', '#414E9C'],
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
                    backgroundColor: ['#A2B0E8', '#8292D9', '#5F6EBA'],
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

        })


        function tahunChart() {
            $.ajax({
                type: "GET",
                url: "/dashboard/tahun",
                dataType: "JSON",
                async: true,
                success: function(data) {
                    // var result = JSON.parse(data);
                    // console.log(result);
                    // console.log(data);

                    var donutChartData = {
                        labels: data.tahun,
                        datasets: [{
                            // label: 'Digital Goods',
                            backgroundColor: '#9BD6E2',
                            borderColor: 'rgba(60,141,188,0.8)',
                            pointRadius: false,
                            pointColor: '#3b8bba',
                            pointStrokeColor: 'rgba(60,141,188,1)',
                            pointHighlightFill: '#fff',
                            pointHighlightStroke: 'rgba(60,141,188,1)',
                            data: data.dataTahun
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


                },
                error: function(data) {
                    alert("error");
                },
            });

        }

        function mhsfakultasChart() {
            $.ajax({
                type: "GET",
                url: "/dashboard/fakultas",
                dataType: "JSON",
                async: true,
                success: function(data) {
                    // var result = JSON.parse(data);
                    // console.log(result);
                    // console.log(data);

                    var byfakultasChartData = {
                        labels: data.fakultas,
                        datasets: [{
                            // label: 'Digital Goods',
                            backgroundColor: '#9BD6E2',
                            borderColor: 'rgba(60,141,188,0.8)',
                            pointRadius: false,
                            pointColor: '#3b8bba',
                            pointStrokeColor: 'rgba(60,141,188,1)',
                            pointHighlightFill: '#fff',
                            pointHighlightStroke: 'rgba(60,141,188,1)',
                            data: data.data
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

                },
                error: function(data) {
                    alert("error");
                },
            });

        }

        function mhsjenjangChart() {
            $.ajax({
                type: "GET",
                url: "/dashboard/jenjang",
                dataType: "JSON",
                async: true,
                success: function(data) {
                    // var result = JSON.parse(data);
                    // console.log(result);
                    // console.log(data.data);

                    var donutData = {
                        labels: data.jenjang,
                        datasets: [{
                            data: data.data,
                            backgroundColor: ['#DCFCFA', '#B5E8ED', '#71AEC2', '#316283'],
                        }]
                    }

                    var pieChartCanvas = $('#pieChart').get(0).getContext('2d')
                    var pieData = donutData;
                    var pieOptions = {
                        maintainAspectRatio: false,
                        responsive: true,
                        layout: {
                            // autoPadding: true,
                            padding: 20,
                        },
                        plugins: {
                            legend: true,
                            outlabels: {
                                text: '%l %p',
                                color: 'white',
                                stretch: 0,
                                font: {
                                    resizable: true,
                                    minSize: 8,
                                    maxSize: 20
                                }
                            },
                            labels: {
                                render: 'value',
                                fontColor: 'black'
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

                },
                error: function(data) {
                    alert("error");
                },
            });

        }

        function dsnFakultasChart() {
            $.ajax({
                type: "GET",
                url: "/dashboard/dsnFakultas",
                dataType: "JSON",
                async: true,
                success: function(data) {
                    // var result = JSON.parse(data);
                    // console.log(result);
                    // console.log(data);

                    //-------------
                    //- Dosen Fakultas CHART -
                    //-------------

                    var dosenfakultasChartData = {
                        labels: data.fakultas,
                        datasets: [{
                            // label: 'Digital Goods',
                            backgroundColor: '#A2B0E8',
                            borderColor: 'rgba(60,141,188,0.8)',
                            pointRadius: false,
                            pointColor: '#3b8bba',
                            pointStrokeColor: 'rgba(60,141,188,1)',
                            pointHighlightFill: '#fff',
                            pointHighlightStroke: 'rgba(60,141,188,1)',
                            data: data.data
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

                },
                error: function(data) {
                    alert("error");
                },
            });

        }

        function dsnJenjangChart() {
            $.ajax({
                type: "GET",
                url: "/dashboard/dsnJenjang",
                dataType: "JSON",
                async: true,
                success: function(data) {
                    // var result = JSON.parse(data);
                    // console.log(result);
                    // console.log(data.data);

                    //-------------
                    //- Dosen Jenjang CHART -
                    //-------------
                    // Get context with jQuery - using jQuery's .get() method.

                    var donutData = {
                        labels: data.jenjang,
                        datasets: [{
                            data: data.data,
                            backgroundColor: ['#8292D9', '#8292D9', '#414E9C'],
                        }]
                    }

                    var pieChartCanvas = $('#dosenjenjangChart').get(0).getContext('2d')
                    var pieData = donutData;
                    var pieOptions = {
                        maintainAspectRatio: false,
                        responsive: true,
                        layout: {
                            padding: 10
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

                },
                error: function(data) {
                    alert("error");
                },
            });

        }
    </script>
@endsection
