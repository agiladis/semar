@section('js')
    <script>
        jQuery(document).ready(function($) {
            // Tendik
            tendikJumlahChart();
            tendikGolonganChart();
            tendikStatusChart();
            tendikUsiaChart();

        });

        // Tendik
        function tendikJumlahChart() {
            $.ajax({
                type: "GET",
                url: "/kepegawaian/jml_tendik",
                dataType: "JSON",
                // async: true,
                success: function(data) {
                    // var result = JSON.parse(data);
                    // console.log(result);
                    // console.log(data);

                    var donutChartData = {
                        labels: data.unit,
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

                    var barChartCanvas = $('#tendikJumlahChart').get(0).getContext('2d')
                    var barChartData = $.extend(true, {}, donutChartData)
                    var temp0 = donutChartData.datasets[0]
                    // var temp1 = donutChartData.datasets[1]
                    barChartData.datasets[0] = temp0
                    // barChartData.datasets[1] = temp1

                    var barChartOptions = {
                        indexAxis: 'y',
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
                        type: 'horizontalBar',
                        data: barChartData,
                        options: barChartOptions
                    })


                },
                error: function(data) {
                    alert("error");
                },
            });

        }

        function tendikGolonganChart() {
            $.ajax({
                type: "GET",
                url: "/kepegawaian/gol_tendik",
                dataType: "JSON",
                // async: true,
                success: function(data) {
                    // var result = JSON.parse(data);
                    // console.log(result);
                    // console.log(data);

                    var donutChartData = {
                        labels: data.golongan,
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

                    var barChartCanvas = $('#tendikGolonganChart').get(0).getContext('2d')
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

        function tendikStatusChart() {
            $.ajax({
                type: "GET",
                url: "/kepegawaian/stat_tendik",
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

                    var pieChartCanvas = $('#tendikStatusChart').get(0).getContext('2d')
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

        function tendikUsiaChart() {
            $.ajax({
                type: "GET",
                url: "/kepegawaian/usia_tendik",
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

                    var barChartCanvas = $('#tendikUsiaChart').get(0).getContext('2d')
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
