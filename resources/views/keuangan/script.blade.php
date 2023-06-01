@section('js')
    <script>
        jQuery(document).ready(function($) {
            // $('.counter').counterUp({
            //     delay: 10,
            //     time: 1000
            // });
            keuanganChart()

        });

        //         var ctx = document.getElementById('myChart').getContext('2d');
        // var myChart = new Chart(ctx, {
        //   type: 'bar',
        //   data: {
        //     labels: ['UPT Bahasa', 'TIK', 'LP3M', 'LPPM'], // Label untuk setiap batang
        //     datasets: [
        //       {
        //         label: 'PAGU',
        //         backgroundColor: '#8292D9', // Warna latar belakang untuk data PAGU
        //         data: [100, 100, 100, 100] // Nilai untuk data PAGU
        //       },
        //       {
        //         label: 'Realisasi',
        //         backgroundColor: '#ECC10C', // Warna latar belakang untuk data Realisasi
        //         data: [100, 100, 100, 100] // Nilai untuk data Realisasi
        //       }
        //     ]
        //   },
        //   options: {
        //     scales: {
        //       x: {
        //         stacked: true // Menyusun batang secara horizontal
        //       },
        //       y: {
        //         stacked: true, // Menyusun batang secara vertikal
        //         suggestedMin: 0, // Batas minimal
        //         suggestedMax: 250 // Batas maksimal
        //       }
        //     }
        //   }
        // });

        function keuanganChart() {
            $.ajax({
                type: "GET",
                url: "/keuangan/keuangan",
                dataType: "JSON",
                // async: true,
                success: function(data) {
                    // var result = JSON.parse(data);
                    // console.log(result);
                    // console.log(data);

                    var donutChartData = {
                        labels: data.unit,
                        datasets: [{
                                label: 'Pagu',
                                backgroundColor: '#8292D9',
                                borderColor: 'rgba(60,141,188,0.8)',
                                pointRadius: false,
                                pointColor: '#3b8bba',
                                pointStrokeColor: 'rgba(60,141,188,1)',
                                pointHighlightFill: '#fff',
                                pointHighlightStroke: 'rgba(60,141,188,1)',
                                data: data.pagu
                            },
                            {
                                label: 'Realisasi',
                                backgroundColor: '#ECC10C',
                                borderColor: 'rgba(40,120,160,0.8)',
                                pointRadius: false,
                                pointColor: '#3b8bba',
                                pointStrokeColor: 'rgba(60,141,188,1)',
                                pointHighlightFill: '#fff',
                                pointHighlightStroke: 'rgba(60,141,188,1)',
                                data: data.realisasi
                            },
                        ]
                    }

                    var barChartCanvas = $('#keuanganChart').get(0).getContext('2d')
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
                            display: true
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
    </script>
@endsection
