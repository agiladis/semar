@extends('layout_eksekutif.main')

@section('title', 'Dashboard')

@section('content')
<div class="row">
    <div class="content-wrapper-before gradient-45deg-green-teal"></div>
    <div class="col s12">
        <div class="container">
            <div class="section">
                <!--card stats start-->
                <div id="card-stats" class="pt-0">
                    <div class="row">
                        <div class="col s12 m6 l6 xl3">
                            <div class="card gradient-45deg-light-blue-cyan gradient-shadow min-height-100 white-text animate fadeLeft">
                                <div class="padding-4">
                                    <div class="row">
                                        <div class="col s7 m7">
                                            <i class="material-icons background-round mt-5">assignment_ind</i>
                                            <p>Kualifikasi S3 : 23%</p>
                                        </div>
                                        <div class="col s5 m5 right-align">
                                            <h5 class="mb-0 white-text">Dosen</h5>
                                            <h6 class="white-text">973</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col s12 m6 l6 xl3">
                            <div class="card gradient-45deg-red-pink gradient-shadow min-height-100 white-text animate fadeLeft">
                                <div class="padding-4">
                                    <div class="row">
                                        <div class="col s5 m5">
                                            <i class="material-icons background-round mt-5">group</i>
                                            <p>Kualifikasi S3 : 23%</p>
                                        </div>
                                        <div class="col s5 m5 right-align">
                                            <p class="white-text">Mahasiswa</p>
                                            <!-- <h6 class="mb-0 white-text">Mahasiswa</h6> -->
                                            <h6 class="white-text">973</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col s12 m6 l6 xl3">
                            <div class="card gradient-45deg-amber-amber gradient-shadow min-height-100 white-text animate fadeRight">
                                <div class="padding-4">
                                    <div class="row">
                                        <div class="col s7 m7">
                                            <i class="material-icons background-round mt-5">timeline</i>
                                            <p>Sales</p>
                                        </div>
                                        <div class="col s5 m5 right-align">
                                            <h5 class="mb-0 white-text">80%</h5>
                                            <p class="no-margin">Growth</p>
                                            <p>3,42,230</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col s12 m6 l6 xl3">
                            <div class="card gradient-45deg-green-teal gradient-shadow min-height-100 white-text animate fadeRight">
                                <div class="padding-4">
                                    <div class="row">
                                        <div class="col s7 m7">
                                            <i class="material-icons background-round mt-5">attach_money</i>
                                            <p>Profit</p>
                                        </div>
                                        <div class="col s5 m5 right-align">
                                            <h5 class="mb-0 white-text">$890</h5>
                                            <p class="no-margin">Today</p>
                                            <p>$25,000</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--card stats end-->
            </div>


        </div>
        <div class="content-overlay"></div>
    </div>
</div>

@endsection


@section('js')

<script>
    (function(window, document, $) {
        // Pie chart
        // ----------------
        //Get the context of the Chart canvas element we want to select
        var ctx = $("#dosen_tendik");

        // Chart Options
        var chartOptions = {
            responsive: true,
            maintainAspectRatio: false,
            responsiveAnimationDuration: 500
        };

        // Chart Data
        var chartData = {
            labels: ["Dosen", "Tendik"],
            datasets: [{
                label: "My First dataset",
                data: [973, 436],
                backgroundColor: ["#03a9f4", "#eb9534"]
            }, ]
        };

        var config = {
            type: "pie",

            // Chart Options
            options: chartOptions,

            data: chartData
        };

        // Create the chart
        var pieChart = new Chart(ctx, config);

        var ctx = $("#pns");

        // Chart Options
        var chartOptions = {
            responsive: true,
            maintainAspectRatio: false,
            responsiveAnimationDuration: 500
        };

        // Chart Data
        var chartData = {
            labels: ["Dosen", "Tendik"],
            datasets: [{
                label: "My First dataset",
                data: [562, 149],
                backgroundColor: ["#03a9f4", "#eb9534"]
            }, ]
        };

        var config = {
            type: "pie",

            // Chart Options
            options: chartOptions,

            data: chartData
        };

        // Create the chart
        var pieChart = new Chart(ctx, config);

        var ctx = $("#nonpns");

        // Chart Options
        var chartOptions = {
            responsive: true,
            maintainAspectRatio: false,
            responsiveAnimationDuration: 500
        };

        // Chart Data
        var chartData = {
            labels: ["Dosen", "Tendik"],
            datasets: [{
                label: "My First dataset",
                data: [154, 200],
                backgroundColor: ["#03a9f4", "#eb9534"]
            }, ]
        };

        var config = {
            type: "pie",

            // Chart Options
            options: chartOptions,

            data: chartData
        };

        // Create the chart
        var pieChart = new Chart(ctx, config);


    })(window, document, jQuery)
</script>

@endsection