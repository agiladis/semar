<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>SEMAR UPNYK</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">

    <link rel="apple-touch-icon" href="apple-touch-icon.png">

    <!-- <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-theme.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/fontAwesome.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/hero-slider.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/owl-carousel.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/templatemo-style.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/lightbox.css') }}"> -->

    <link rel="stylesheet" href="{{ env('APP_URL') . 'assets/css/bootstrap.min.css' }}">
    <link rel="stylesheet" href="{{ env('APP_URL') . 'assets/css/bootstrap-theme.min.css' }}">
    <link rel="stylesheet" href="{{ env('APP_URL') . 'assets/css/fontAwesome.css' }}">
    <link rel="stylesheet" href="{{ env('APP_URL') . 'assets/css/hero-slider.css' }}">
    <link rel="stylesheet" href="{{ env('APP_URL') . 'assets/css/owl-carousel.css' }}">
    <link rel="stylesheet" href="{{ env('APP_URL') . 'assets/css/templatemo-style.css' }}">
    <link rel="stylesheet" href="{{ env('APP_URL') . 'assets/css/lightbox.css' }}">

    <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
</head>

<body>
    <div class="header">
        <div class="container">
            <nav class="navbar navbar-inverse" role="navigation">
                <div class="navbar-header w-100">
                    <!-- <button type="button" id="nav-toggle" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button> -->
                    <a href="#" class="navbar-brand scroll-top"><em>S</em>emar</a>

                </div>
                <a><img src="{{ asset('assets/img/logo_all.png') }}"
                        style="height:70px; float: right; padding-top: 9px; position: absolute; right:0; top:0;"></a>

                <!--/.navbar-header-->
                <div id="main-nav" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="#" class="scroll-top"></a></li>
                        <li><a href="#" class="scroll-link" data-id="about"></a></li>
                        <li><a href="#" class="scroll-link" data-id="portfolio"></a></li>
                        <li><a href="#" class="scroll-link" data-id="blog"></a></li>
                        <li><a href="#" class="scroll-link" data-id="contact-us"></a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>

    <div class="parallax-content baner-content justify-content-center" id="home">
        <div class="container">

            <div class="text-content">
                <div class="icon">
                    <a target="_blank" href="http://semar.upnyk.ac.id/dashboard/">
                        <img src="{{ asset('assets/img/icon_semar_9.png') }}" style="width: 300px; padding-bottom: 0">
                    </a>
                </div>

                <div class="" style="margin:30px 0 40px 0;">
                    <a target="_blank" href="/login" class="btn btn-info">EKSEKUTIF DASHBOARD</a>
                    <!-- <a target="_blank" href="http://semar.upnyk.ac.id/dashboard/" class="btn btn-info">EKSEKUTIF DASHBOARD</a> -->
                </div>

                <h2><em>SISTEM</em> <span>MANAJEMEN AKADEMIK</span> DAN RISET</h2>
                <p>Sistem Manajemen Akademik dan Riset merupakan sistem informasi terpadu untuk memudahkan
                    layanan Akademik, Kepegawaian, Penganggaran, Keuangan, Penelitian dan Pengabdian, Office Automation,
                    Remunerasi dan Akuntansi</p>
                <div class="primary-white-button">
                </div>
                </br>
            </div>
        </div>
    </div>
