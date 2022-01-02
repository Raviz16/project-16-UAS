<!doctype html>
<html class="no-js" lang="zxx">
    
<!-- index28:48-->
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Shopping Star</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="{{url('public')}}/limupa/images/favicon.png">
        <!-- Material Design Iconic Font-V2.2.0 -->
        <link rel="stylesheet" href="{{url('public')}}/limupa/css/material-design-iconic-font.min.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="{{url('public')}}/limupa/css/font-awesome.min.css">
        <!-- Font Awesome Stars-->
        <link rel="stylesheet" href="{{url('public')}}/limupa/css/fontawesome-stars.css">
        <!-- Meanmenu CSS -->
        <link rel="stylesheet" href="{{url('public')}}/limupa/css/meanmenu.css">
        <!-- owl carousel CSS -->
        <link rel="stylesheet" href="{{url('public')}}/limupa/css/owl.carousel.min.css">
        <!-- Slick Carousel CSS -->
        <link rel="stylesheet" href="{{url('public')}}/limupa/css/slick.css">
        <!-- Animate CSS -->
        <link rel="stylesheet" href="{{url('public')}}/limupa/css/animate.css">
        <!-- Jquery-ui CSS -->
        <link rel="stylesheet" href="{{url('public')}}/limupa/css/jquery-ui.min.css">
        <!-- Venobox CSS -->
        <link rel="stylesheet" href="{{url('public')}}/limupa/css/venobox.css">
        <!-- Nice Select CSS -->
        <link rel="stylesheet" href="{{url('public')}}/limupa/css/nice-select.css">
        <!-- Magnific Popup CSS -->
        <link rel="stylesheet" href="{{url('public')}}/limupa/css/magnific-popup.css">
        <!-- Bootstrap V4.1.3 Fremwork CSS -->
        <link rel="stylesheet" href="{{url('public')}}/limupa/css/bootstrap.min.css">
        <!-- Helper CSS -->
        <link rel="stylesheet" href="{{url('public')}}/limupa/css/helper.css">
        <!-- Main Style CSS -->
        <link rel="stylesheet" href="{{url('public')}}/limupa/style.css">
        <!-- Responsive CSS -->
        <link rel="stylesheet" href="{{url('public')}}/limupa/css/responsive.css">
        <!-- Modernizr js -->
        <script src="{{url('public')}}/limupa/js/vendor/modernizr-2.8.3.min.js"></script>

         @stack('style')
    </head>
    <body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
        <!-- Begin Body Wrapper -->
        <div class="body-wrapper">
            <!-- Begin Header Area -->
             @include('client.section.header')
            <!-- Begin Slider With Banner Area -->
             @include('client.section.sidebar')
            <!-- Slider With Banner Area End Here -->
            <!-- Begin Product Area -->
            @yield('content')
            <!-- Product Area End Here -->
           
        
            <!-- Begin Footer Area -->
              @include('client.section.footer')
            
        </div>
        <!-- Body Wrapper End Here -->
        <!-- jQuery-V1.12.4 -->
        <script src="{{url('public')}}/limupa/js/vendor/jquery-1.12.4.min.js"></script>
        <!-- Popper js -->
        <script src="{{url('public')}}/limupa/js/vendor/popper.min.js"></script>
        <!-- Bootstrap V4.1.3 Fremwork js -->
        <script src="{{url('public')}}/limupa/js/bootstrap.min.js"></script>
        <!-- Ajax Mail js -->
        <script src="{{url('public')}}/limupa/js/ajax-mail.js"></script>
        <!-- Meanmenu js -->
        <script src="{{url('public')}}/limupa/js/jquery.meanmenu.min.js"></script>
        <!-- Wow.min js -->
        <script src="{{url('public')}}/limupa/js/wow.min.js"></script>
        <!-- Slick Carousel js -->
        <script src="{{url('public')}}/limupa/js/slick.min.js"></script>
        <!-- Owl Carousel-2 js -->
        <script src="{{url('public')}}/limupa/js/owl.carousel.min.js"></script>
        <!-- Magnific popup js -->
        <script src="{{url('public')}}/limupa/js/jquery.magnific-popup.min.js"></script>
        <!-- Isotope js -->
        <script src="{{url('public')}}/limupa/js/isotope.pkgd.min.js"></script>
        <!-- Imagesloaded js -->
        <script src="{{url('public')}}/limupa/js/imagesloaded.pkgd.min.js"></script>
        <!-- Mixitup js -->
        <script src="{{url('public')}}/limupa/js/jquery.mixitup.min.js"></script>
        <!-- Countdown -->
        <script src="{{url('public')}}/limupa/js/jquery.countdown.min.js"></script>
        <!-- Counterup -->
        <script src="{{url('public')}}/limupa/js/jquery.counterup.min.js"></script>
        <!-- Waypoints -->
        <script src="{{url('public')}}/limupa/js/waypoints.min.js"></script>
        <!-- Barrating -->
        <script src="{{url('public')}}/limupa/js/jquery.barrating.min.js"></script>
        <!-- Jquery-ui -->
        <script src="{{url('public')}}/limupa/js/jquery-ui.min.js"></script>
        <!-- Venobox -->
        <script src="{{url('public')}}/limupa/js/venobox.min.js"></script>
        <!-- Nice Select js -->
        <script src="{{url('public')}}/limupa/js/jquery.nice-select.min.js"></script>
        <!-- ScrollUp js -->
        <script src="{{url('public')}}/limupa/js/scrollUp.min.js"></script>
        <!-- Main/Activator js -->
        <script src="{{url('public')}}/limupa/js/main.js"></script>

        @stack('script')
        {{-- {<script>
            $(".table-datatable").DataTable();
        </script> --}}
    </body>

<!-- index30:23-->
</html>