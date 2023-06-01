@extends('layout_eksekutif.main')

@section('title', 'Kepegawaian')

@section('content')
<div class="row">
    <div class="content-wrapper-before gradient-45deg-green-teal"></div>
    <div class="col s12">
        <div class="container">
            <div class="section">
                <!--Pie & Doughnut Charts-->
                <div id="chartjs-pie-chart" class="card center-align">
                    <div class="card-content">
                        <h4 class="card-title">Data Dosen & Tendik</h4>
                        <div class="row">
                            <div class="col s12">
                                <!-- <p class="mb-2">
                                        Pie and doughnut charts are probably the most commonly used chart there are. They are divided into
                                        segments, the arc of each segment shows the proportional value of each piece of data.
                                    </p> -->
                                <div class="row">

                                    <div class="col s12 m6 l3">
                                        <h5 class="card-title">Perbandingan PNS</h5>
                                        <div class="sample-chart-wrapper">
                                            <canvas id="pns" height="200"></canvas>
                                        </div>
                                        <!-- <p class="header center">PNS</p> -->
                                    </div>
                                    
                                    <div class="col s12 m6 l6">
                                        <div class="sample-chart-wrapper"><canvas id="dosen_tendik" height="400"></canvas></div>
                                        <!-- <p class="header center">Jumlah</p> -->
                                    </div>
                                    
                                    
                                    <div class="col s12 m6 l3">
                                        <h5 class="card-title">Perbandingan NON-PNS</h5>
                                        <div class="sample-chart-wrapper"><canvas id="nonpns" height="200"></canvas></div>    
                                    </div>
                                    
                                    
                                    
                                </div>

                                <div class="col s12 m6 l3">
                                        <h5 class="card-title">S2 PNS</h5>
                                        <div class="sample-chart-wrapper">
                                            <canvas id="pns1" height="200"></canvas>
                                        </div>
                                        <!-- <p class="header center">PNS</p> -->
                                    </div> 

                                    <div class="col s12 m6 l3">
                                        <h5 class="card-title">S3 PNS</h5>
                                        <div class="sample-chart-wrapper">
                                            <canvas id="pns2" height="200"></canvas>
                                        </div>
                                        <!-- <p class="header center">PNS</p> -->
                                    </div>

                                    

                                    

                                    <div class="col s12 m6 l3">
                                        <h5 class="card-title">S2 NON-PNS</h5>
                                        <div class="sample-chart-wrapper"><canvas id="nonpns1" height="200"></canvas></div>    
                                    </div>

                                    <div class="col s12 m6 l3">
                                        <h5 class="card-title">S3 NON-PNS</h5>
                                        <div class="sample-chart-wrapper"><canvas id="nonpns2" height="200"></canvas></div>    
                                    </div>
                                    <!-- <div class="col s12 m6 l6">
                                            <div class="sample-chart-wrapper"><canvas id="doughnut-chart" height="400"></canvas></div>
                                            <p class="header center">Doughnut Charts</p>
                                        </div> -->
                            </div>
                        </div>
                    </div>
                </div>

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


        var pieChart = new Chart(ctx, config);

        var ctx = $("#pns1");

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


        var pieChart = new Chart(ctx, config);

        var ctx = $("#pns2");

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

        var pieChart = new Chart(ctx, config);

var ctx = $("#nonpns1");

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

var pieChart = new Chart(ctx, config);

var ctx = $("#nonpns2");

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