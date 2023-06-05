@extends('layout.main')
@section('content')
<section id="about" class="page-section">
    <div class="container">
        <div class="row">
            
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="service-item">
                    <div class="card panel-heading" role="tab" id="headingOne">
                        <div class="icon">
                            <a target="_blank" href="http://bima.upnyk.ac.id/login" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <img src="{{asset('assets/icon_wayang/bima.png')}}" alt="">
                            </a>
                        </div>
                        <h4>SISTEM INFORMASI AKADEMIK</h4></br>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                        Bima merupakan sistem informasi berbasis web yang berfungsi untuk mengelola administrasi akademik secara online. SI Akademik memudahkan penggunanya melakukan pelaporan terkait kegiatan akademik di UPN “Veteran” Yogyakarta
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="service-item">
                    <div class="card panel-heading" role="tab" id="headingTwo">
                        <div class="icon">
                            <a target="_blank" href="http://kunti.upnyk.ac.id/" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                <img src="{{asset('assets/icon_wayang/kunthi.png')}}" alt="">
                            </a>
                        </div>
                        <h4>SISTEM INFORMASI AKUNTANSI</h4></br>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                        SI Akuntansi merupakan Sistem Informasi yang memudahkan penggunanya dalam mengelola data keuangan dalam UPN “Veteran” Yogyakarta. SI Akuntansi memudahkan dalam pelaporan sumber daya, dokumen terkait dan pengecekan transaksi keuangan.
                    </div>
                </div>
            </div>
            
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="service-item">
                    <div class="card panel-heading" role="tab" id="headingFour">
                        <div class="icon">
                            <a target="_blank" href="http://srikandi.upnyk.ac.id" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                <img src="{{asset('assets/icon_wayang/srikandi.png')}}" alt="">
                            </a>
                        </div>
                        <h4>SISTEM INFORMASI PENELITIAN DAN PENGABDIAN</h4>
                    </div>
                    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                        Srikandi merupakan sistem informasi yang menyediakan layanan dalam kegiatan administrasi pada penelitian dan pengabdian. Srikandi memberikan kemudahan untuk melakukan pengajuan penelitian dan pengabdian.
                    </div>
                </div>
            </div>
            
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="service-item">
                    <div class="card panel-heading" role="tab" id="headingFour">
                        <div class="icon">
                            <a target="_blank" href="#" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                                <img src="{{asset('assets/img/remunerasi.png')}}" alt="">
                            </a>
                        </div>
                        <h4>SISTEM INFORMASI REMUNERASI</h4></br>
                    </div>
                    <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                        Siremun merupakan sistem informasi yang berisi total kompesasi yang diterima oleh pegawai sebagai imbalan dari jasa yang telah dikerjakannya, baik berupa uang maupun benefit lainnya.
                    </div>
                </div>
            </div>
            
        </div>
        </br></br>
        <div class="row">
            
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="service-item">
                    <div class="card panel-heading" role="tab" id="headingFive">
                        <div class="icon">
                            <a target="_blank" href="https://pergiwa.upnyk.ac.id" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                                <img src="{{asset('assets/icon_wayang/pergiwa.png')}}" alt="">
                            </a>
                        </div>
                        <h4>SISTEM INFORMASI PENGANGGARAN</h4>
                        <div class="line-dec"></div>
                    </div>
                    <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
                        Sistem Informasi Penganggaran merupakan sistem informasi yang berisi tentang rancangan biaya atau uang yang dihabiskan dalam periode tertentu untuk melaksanakan suatu program.
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="service-item">
                    <div class="card panel-heading" role="tab" id="headingSix">
                        <div class="icon">
                            <a target="_blank" href="http://kunti.upnyk.ac.id" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="true" aria-controls="collapseSix">
                                <img src="{{asset('assets/icon_wayang/kunthi.png')}}" alt="">
                            </a>
                        </div>
                        <h4>SISTEM INFORMASI KEUANGAN</h4>
                    </div>
                    <div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
                        Kunti adalah sistem informasi yang melayani proses pengaturan keuangan yang terjadi di UPN “Veteran” Yogyakarta.
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="service-item">
                    <div class="card panel-heading" role="tab" id="headingSeven">
                        <div class="icon">
                            <a target="_blank" href="http://kresna.upnyk.ac.id" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven" aria-expanded="true" aria-controls="collapseSeven">
                                <img src="{{asset('assets/icon_wayang/kresna.png')}}" alt="">
                            </a>
                        </div>
                        <h4>SISTEM INFORMASI KEPEGAWAIAN</h4>
                    </div>
                    <div id="collapseSeven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSeven">
                        Kresna adalah sistem informasi yang memberikan layanan seputar kepegawaian di UPN “Veteran” Yogyakarta.
                    </div>
                </div>
            </div>
            
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="service-item">
                    <div class="card panel-heading" role="tab" id="headingEight">
                        <div class="icon">
                            <a target="_blank" href="http://arjuna.upnyk.ac.id" data-toggle="collapse" data-parent="#accordion" href="#collapseEight" aria-expanded="true" aria-controls="collapseEight">
                                <img src="{{asset('assets/icon_wayang/arjuna.png')}}" alt="">
                            </a>
                        </div>
                        <h4>SISTEM INFORMASI OFFICE AUTOMATION</h4>
                    </div>
                    <div id="collapseEight" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingEight">
                        Arjuna adalah sistem informasi yang memberikan layanan seputar proses pengarsipan UPN “Veteran” Yogyakarta.
                    </div>
                </div>
            </div>
        </div>
        <br><br>
        <div class="row">

            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="service-item">
                    <div class="card panel-heading" role="tab" id="headingNine">
                        <div class="icon">
                            <a target="_blank" href="https://sadewa.upnyk.ac.id" data-toggle="collapse" data-parent="#accordion" href="#collapseNine" aria-expanded="true" aria-controls="collapseNine">
                                <img src="{{asset('assets/icon_wayang/sadewa.png')}}" alt="">
                            </a>
                        </div>
                        <h4>SISTEM AKTIVITAS DAN PRESTASI MAHASISWA </h4>
                    </div>
                    <div id="collapseNine" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingNine">
                        Sadewa merupakan SI yang berfungsi untuk mencatat aktivitas dan prestasi mahasiswa serta layanan terpusat helpdesk dosen dan mahasiswa.
                    </div>
                </div>
            </div>
            
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="service-item">
                    <div class="card panel-heading" role="tab" id="headingTen">
                        <div class="icon">
                            <a target="_blank" href="https://nakula.upnyk.ac.id" data-toggle="collapse" data-parent="#accordion" href="#collapseTen" aria-expanded="true" aria-controls="collapseTen">
                                <img src="{{asset('assets/icon_wayang/nakula.png')}}" alt="">
                            </a>
                        </div>
                        <h4>SISTEM PRESENSI<br> DOSEN</h4>
                    </div>
                    <div id="collapseTen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTen">
                        Nakula merupakan SI yang digunakan oleh dosen maupun tendik melakukan presensi mengajar dan presensi kehadiran harian.
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="service-item">
                    <div class="card panel-heading" role="tab" id="headingEleven">
                        <div class="icon">
                            <a target="_blank" href="https://spada.upnyk.ac.id" data-toggle="collapse" data-parent="#accordion" href="#collapseEleven" aria-expanded="true" aria-controls="collapseEleven">
                                <img src="{{asset('assets/icon/spada.png')}}" alt="">
                            </a>
                        </div>
                        <h4>SISTEM PEMBELAJARAN DARING WIMAYA</h4>
                    </div>
                    <div id="collapseEleven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingEleven">
                        Spada Wimaya merupakan learning management system official UPN "Veteran" Yogyakarta
                    </div>
                </div>
            </div>
            
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="service-item">
                    <div class="card panel-heading" role="tab" id="headingTwelve">
                        <div class="icon">
                            <a target="_blank" href="https://pandu.upnyk.ac.id" data-toggle="collapse" data-parent="#accordion" href="#collapseTwelve" aria-expanded="true" aria-controls="collapseTwelve">
                                <img src="{{asset('assets/icon_wayang/pandu.png')}}" alt="">
                            </a>
                        </div>
                        <h4>SISTEM PENJAMINAN AUDIT DAN MUTU</h4>
                    </div>
                    <div id="collapseTwelve" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwelve">
                        Pandu merupakan SI yang berfungsi untuk melakukan audit penjaminan mutu secara berkala baik mutu akademik, pembelajaran dan persiapan akreditasi prodi (AMI)
                    </div>
                </div>
            </div>
        </div>

        <br><br>
        <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="service-item">
                    <div class="card panel-heading" role="tab" id="headingThirteen">
                        <div class="icon">
                            <a target="_blank" href="https://antareja.upnyk.ac.id" data-toggle="collapse" data-parent="#accordion" href="#collapseThirteen" aria-expanded="true" aria-controls="collapseThirteen">
                                <img src="{{asset('assets/icon_wayang/antareja.png')}}" alt="">
                            </a>
                        </div>
                        <h4>ANTAREJA</h4>
                    </div>
                    <div id="collapseThirteen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThirteen">
                        Antareja adalah Aplikasi NoTa kesepahamAn dan keRJasamA. Aplikasi ini digunakan untuk mengelola kerjasama antar institusi baik skala lokal, nasional ataupun internasional. Kerjasama yang baik ditunjukkan dengan adanya bukti pelaksanaan kerjasama, MoU dan MoA.
                    </div>
                </div>
            </div>
            
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="service-item">
                    <div class="card panel-heading" role="tab" id="headingForteen">
                        <div class="icon">
                            <a target="_blank" href="https://salyapati.upnyk.ac.id" data-toggle="collapse" data-parent="#accordion" href="#collapseForteen" aria-expanded="true" aria-controls="collapseForteen">
                                <img src="{{asset('assets/icon_wayang/salyapati.png')}}" alt="">
                            </a>
                        </div>
                        <h4>SALYAPATI</h4>
                    </div>
                    <div id="collapseForteen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingForteen">
                        Salyapati adalah Sistem dan Aplikasi LaYanan Akreditasi PerguruAn TInggi. Aplikasi ini bertujuan untuk mendukung akreditasi perguruan tinggi yang tersimpan data-data akademik, mahasiwa, prestasi, dosen, dll. Aplikasi ini diharapkan membantu pengelolaan data pada saat akreditasi perguruan tinggi.
                    </div>
                </div>
            </div>
            
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="service-item">
                    <div class="card panel-heading" role="tab" id="headingFiveteen">
                        <div class="icon">
                            <a target="_blank" href="https://kampusmerdeka.upnyk.ac.id" data-toggle="collapse" data-parent="#accordion" href="#collapseFiveteen" aria-expanded="true" aria-controls="collapseFiveteen">
                                <img src="{{asset('assets/img/logo-kampus-merdeka.png')}}" alt="">
                            </a>
                        </div>
                        <h4>KAMPUS MERDEKA</h4>
                    </div>
                    <div id="collapseFiveteen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFiveteen">
                        Kampus Merdeka merupakan portal untuk mendukung pelaksanaan merdeka belajar kampus merdeka (MBKM). Portal ini menyediakan informasi jadwal dan fasilitas pendaftaran untuk mahasiswa inbond.
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="service-item">
                    <div class="card panel-heading" role="tab" id="headingSixteen">
                        <div class="icon">
                            <a target="_blank" href="https://bisma.upnyk.ac.id" data-toggle="collapse" data-parent="#accordion" href="#collapseSixteen" aria-expanded="true" aria-controls="collapseSixteen">
                                <img src="{{asset('assets/icon_wayang/bisma.png')}}" alt="">
                            </a>
                        </div>
                        <h4>BISMA</h4>
                    </div>
                    <div id="collapseSixteen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSixteen">
                        Bisma merupakan sistem informasi Barang Inventaris milik negara yang difokuskan pada penggunaan ruang bersama perkuliahan. Bisma mampu menyediakan ruangan kelas lintas prodi dan fakultas.
                    </div>
                </div>
            </div>
    </div>
</section>

@endsection