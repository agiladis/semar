@section('js')
    <script>
        jQuery(document).ready(function($) {
            mhsJumlahChart();

        });

        function mhsJumlahChart() {
            $.ajax({
                type: "GET",
                url: "/kemahasiswaan/jml_mahasiswa",
                dataType: "JSON",
                // async: true,
                success: function(data) {
                    // var result = JSON.parse(data);
                    // console.log(result);
                    // console.log(data);

                    var donutChartData = {
                        labels: data.jumlah,
                        datasets: [{
                            type: 'bar',
                            label: 'Mahasiswa Aktif',
                            data: data.aktif,
                            borderColor: 'rgb(255, 99, 132)',
                            backgroundColor: 'rgba(53, 489, 380, 0.5)'
                        }, {
                            type: 'line',
                            label: 'Mahasiswa Diterima',
                            data: data.diterima,
                            fill: false,
                            borderColor: 'rgb(54, 162, 235)'
                        }, {
                            type: 'line',
                            label: 'Mahasiswa Lulus',
                            data: data.lulus,
                            fill: false,
                            borderColor: 'rgb(39, 471, 129)'
                        }, ],
                    }

                    var barChartCanvas = $('#mhsJumlahChart').get(0).getContext('2d')
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
