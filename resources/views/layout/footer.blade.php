        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-12">
                        <div class="logo">
                            <a class="logo-ft scroll-top" href="#"><em>S</em>emar</a>
                            <p>Copyright &copy; 2019 UPT.TIK
                        <br>Teknologi Informasi dan Komunikasi</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="location">
                            <h4>Location</h4>
                            <ul>
                                <li>Jl. SWK 104 (Lingkar Utara), Condongcatur, Yogyakarta 55283 <br>Kampus Pusat</li>
                                <li>Jl. Babarsari 2 Yogyakarta 55281<br>Kampus Unit II</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-12">
                        <div class="contact-info">
                            <h4>More Info</h4>
                            <ul>
                                <li><em>Phone</em>: 0274 486733</li>
                                <li><em>Email</em>: info@upnyk.ac.id</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-12">
                        <div class="connect-us">
                            <h4>Get Social with us</h4>
                            <ul>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-google"></i></a></li>
                                <li><a href="#"><i class="fa fa-rss"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="{{asset('assets/js/vendor/jquery-1.11.2.min.js')}}"><\/script>')</script>

        <script src="{{asset('assets/js/vendor/bootstrap.min.js')}}"></script>

        {{-- for collapse on hover homapage.blade.php --}}
        <script>
            $(".panel-heading").parent('.service-item').hover(
                function () {
                    $(this).children('.collapse').collapse('show');
                    // $(this).addClass('panel');
                }, function () {
                    $(this).children('.collapse').collapse('hide');
                    // $(this).removeClass('panel');
                }
            );
        </script>

        <script src="{{asset('assets/js/plugins.js')}}"></script>
        <script src="{{asset('assets/js/main.js')}}"></script>

        {{-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script> --}}
        <script type="text/javascript">
        $(document).ready(function() {
            // navigation click actions
            $('.scroll-link').on('click', function(event){
                event.preventDefault();
                var sectionID = $(this).attr("data-id");
                scrollToID('#' + sectionID, 750);
            });
            // scroll to top action
            $('.scroll-top').on('click', function(event) {
                event.preventDefault();
                $('html, body').animate({scrollTop:0}, 'slow');
            });
            // mobile nav toggle
            $('#nav-toggle').on('click', function (event) {
                event.preventDefault();
                $('#main-nav').toggleClass("open");
            });
        });
        // scroll function
        function scrollToID(id, speed){
            var offSet = 50;
            var targetOffset = $(id).offset().top - offSet;
            var mainNav = $('#main-nav');
            $('html,body').animate({scrollTop:targetOffset}, speed);
            if (mainNav.hasClass("open")) {
                mainNav.css("height", "1px").removeClass("in").addClass("collapse");
                mainNav.removeClass("open");
            }
        }
        if (typeof console === "undefined") {
            console = {
                log: function() { }
            };
        }
        </script>
    </body>
</html>
