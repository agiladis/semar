<!-- BEGIN: Footer-->

<footer class="page-footer footer footer-static footer-dark gradient-45deg-green-teal gradient-shadow navbar-border navbar-shadow">
    <div class="footer-copyright">
        <div class="container"><span>&copy; 2023 <a href="https://upnyk.ac.id" target="_blank">UPNVYK</a> All rights reserved.</span></div>
    </div>
</footer>

<!-- END: Footer-->
<!-- BEGIN VENDOR JS-->
<script src="{{asset('app-assets')}}/js/vendors.min.js"></script>
<!-- BEGIN VENDOR JS-->
<!-- BEGIN PAGE VENDOR JS-->
<script src="{{asset('app-assets')}}/vendors/chartjs/chart.min.js"></script>
<script src="{{asset('app-assets')}}/vendors/chartist-js/chartist.min.js"></script>
<script src="{{asset('app-assets')}}/vendors/chartist-js/chartist-plugin-tooltip.js"></script>
<script src="{{asset('app-assets')}}/vendors/chartist-js/chartist-plugin-fill-donut.min.js"></script>
<!-- END PAGE VENDOR JS-->
<!-- BEGIN THEME  JS-->
<script src="{{asset('app-assets')}}/js/plugins.js"></script>
<script src="{{asset('app-assets')}}/js/search.js"></script>
<script src="{{asset('app-assets')}}/js/custom/custom-script.js"></script>
<script src="{{asset('app-assets')}}/js/scripts/customizer.js"></script>
<!-- END THEME  JS-->
<!-- BEGIN PAGE LEVEL JS-->
<script src="{{asset('app-assets')}}/js/scripts/dashboard-modern.js"></script>
<script src="{{asset('app-assets')}}/js/scripts/intro.js"></script>
<!-- END PAGE LEVEL JS-->

@yield('js')
</body>

</html>