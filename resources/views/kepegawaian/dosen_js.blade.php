@section('js')
    <script>
        jQuery(document).ready(function($) {
            // Dosen
            dosenJenjangChart();
            dosenJabatanChart();
            dosenStatusChart();
            dosenFakultasChart();
            dosenKelaminChart();
            dosenStudiChart();
            dosenUsiaChart();

        });

        // Dosen
        function dosenJenjangChart() {
            $.ajax({
                type: "GET",
                url: "/kepegawaian/jenj_dosen",
                dataType: "JSON",
                async: true,
                success: function(data) {
                    // var result = JSON.parse(data);
                    // console.log(result);
                    // console.log(data);

                    //-------------
                    //- Dosen Jenjang CHART -
                    //-------------
                    // Get context with jQuery - using jQuery's .get() method.

                    var donutData = {
                        labels: data.jenjang,
                        datasets: [{
                            data: data.values,
                            backgroundColor: ['rgba(60,141,188,0.8)', 'rgba(40,130,158,0.8)',
                                'rgba(50,130,168,0.8)', 'rgba(70,161,210,0.8)'
                            ],
                        }]
                    }

                    var pieChartCanvas = $('#dosenJenjangChart').get(0).getContext('2d')
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

        function dosenJabatanChart() {
            $.ajax({
                type: "GET",
                url: "/kepegawaian/jabt_dosen",
                dataType: "JSON",
                async: true,
                success: function(data) {
                    // var result = JSON.parse(data);
                    // console.log(result);
                    // console.log(data);

                    //-------------
                    //- Dosen Jenjang CHART -
                    //-------------
                    // Get context with jQuery - using jQuery's .get() method.

                    var donutData = {
                        labels: data.jabatan,
                        datasets: [{
                            data: data.values,
                            backgroundColor: ['rgba(60,141,188,0.8)', 'rgba(40,130,158,0.8)',
                                'rgba(50,130,168,0.8)', 'rgba(70,161,210,0.8)',
                                'rgba(80,171,200,0.8)', 'rgba(30,110,120,0.8)'
                            ],
                        }]
                    }

                    var pieChartCanvas = $('#dosenJabatanChart').get(0).getContext('2d')
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

        function dosenStatusChart() {
            $.ajax({
                type: "GET",
                url: "/kepegawaian/stat_dosen",
                dataType: "JSON",
                async: true,
                success: function(data) {
                    // var result = JSON.parse(data);
                    // console.log(result);
                    // console.log(data);

                    //-------------
                    //- Dosen Jenjang CHART -
                    //-------------
                    // Get context with jQuery - using jQuery's .get() method.

                    var donutData = {
                        labels: data.status,
                        datasets: [{
                            data: data.values,
                            backgroundColor: ['rgba(60,141,188,0.8)', 'rgba(40,130,158,0.8)',
                                'rgba(50,130,168,0.8)', 'rgba(70,161,210,0.8)',
                            ],
                        }]
                    }

                    var pieChartCanvas = $('#dosenStatusChart').get(0).getContext('2d')
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

        function dosenFakultasChart() {
            $.ajax({
                type: "GET",
                url: "/kepegawaian/fak_dosen",
                dataType: "JSON",
                // async: true,
                success: function(data) {
                    // var result = JSON.parse(data);
                    // console.log(result);
                    // console.log(data);

                    var donutChartData = {
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
                            data: data.values
                        }, ]
                    }

                    var barChartCanvas = $('#dosenFakultasChart').get(0).getContext('2d')
                    var barChartData = $.extend(true, {}, donutChartData)
                    var temp0 = donutChartData.datasets[0]
                    // var temp1 = donutChartData.datasets[1]
                    barChartData.datasets[0] = temp0
                    // barChartData.datasets[1] = temp1

                    var barChartOptions = {
                        // indexAxis: 'y',
                        responsive: true,
                        // categoryPercentage: 1.0,
                        // barPercentage: 0.5,
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

        function dosenKelaminChart() {
            $.ajax({
                type: "GET",
                url: "/kepegawaian/kelm_dosen",
                dataType: "JSON",
                async: true,
                success: function(data) {
                    // var result = JSON.parse(data);
                    // console.log(result);
                    // console.log(data);

                    //-------------
                    //- Dosen Jenjang CHART -
                    //-------------
                    // Get context with jQuery - using jQuery's .get() method.

                    var donutData = {
                        labels: data.kelamin,
                        datasets: [{
                            data: data.values,
                            backgroundColor: ['rgba(60,141,188,0.8)', 'rgba(40,130,158,0.8)', ],
                        }]
                    }

                    var pieChartCanvas = $('#dosenKelaminChart').get(0).getContext('2d')
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

        function dosenStudiChart() {
            $.ajax({
                type: "GET",
                url: "/kepegawaian/stud_dosen",
                dataType: "JSON",
                // async: true,
                success: function(data) {
                    // var result = JSON.parse(data);
                    // console.log(result);
                    // console.log(data);

                    var donutChartData = {
                        labels: data.studi,
                        datasets: [{
                            // label: 'Digital Goods',
                            backgroundColor: '#9BD6E2',
                            borderColor: 'rgba(60,141,188,0.8)',
                            pointRadius: false,
                            pointColor: '#3b8bba',
                            pointStrokeColor: 'rgba(60,141,188,1)',
                            pointHighlightFill: '#fff',
                            pointHighlightStroke: 'rgba(60,141,188,1)',
                            data: data.values
                        }, ]
                    }

                    var barChartCanvas = $('#dosenStudiChart').get(0).getContext('2d')
                    var barChartData = $.extend(true, {}, donutChartData)
                    var temp0 = donutChartData.datasets[0]
                    // var temp1 = donutChartData.datasets[1]
                    barChartData.datasets[0] = temp0
                    // barChartData.datasets[1] = temp1

                    var barChartOptions = {
                        // indexAxis: 'y',
                        responsive: true,
                        // categoryPercentage: 1.0,
                        // barPercentage: 0.5,
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

        function dosenUsiaChart() {
            $.ajax({
                type: "GET",
                url: "/kepegawaian/usia_dosen",
                dataType: "JSON",
                // async: true,
                success: function(data) {
                    // var result = JSON.parse(data);
                    // console.log(result);
                    // console.log(data);

                    var donutChartData = {
                        labels: data.usia,
                        datasets: [{
                            // label: 'Digital Goods',
                            backgroundColor: '#9BD6E2',
                            borderColor: 'rgba(60,141,188,0.8)',
                            pointRadius: false,
                            pointColor: '#3b8bba',
                            pointStrokeColor: 'rgba(60,141,188,1)',
                            pointHighlightFill: '#fff',
                            pointHighlightStroke: 'rgba(60,141,188,1)',
                            data: data.values
                        }, ]
                    }

                    var barChartCanvas = $('#dosenUsiaChart').get(0).getContext('2d')
                    var barChartData = $.extend(true, {}, donutChartData)
                    var temp0 = donutChartData.datasets[0]
                    // var temp1 = donutChartData.datasets[1]
                    barChartData.datasets[0] = temp0
                    // barChartData.datasets[1] = temp1

                    var barChartOptions = {
                        // indexAxis: 'y',
                        responsive: true,
                        // categoryPercentage: 1.0,
                        // barPercentage: 0.5,
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
    </script>
@endsection
