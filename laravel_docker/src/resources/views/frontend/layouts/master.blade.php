<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="multikart">
    <meta name="keywords" content="multikart">
    <meta name="author" content="multikart">
    <link rel="icon" href="{{asset('img/favicon/12.png')}}')}}" type="image/x-icon">
    <link rel="shortcut icon" href="{{asset('img/favicon/12.png')}}')}}" type="image/x-icon">
    <title>Thanh Shop</title>

    <!--Google font-->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Yellowtail&display=swap" rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/vendors/fontawesome.css')}}">

    <!--Slick slider css-->
    <link rel="stylesheet" type="text/css" href="{{asset('css/vendors/slick.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/vendors/slick-theme.css')}}">

    <!-- Animate icon -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/vendors/animate.css')}}">

    <!-- Themify icon -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/vendors/themify-icons.css')}}">

    <!-- Bootstrap css -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/vendors/bootstrap.css')}}">

    <!-- Theme css -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">

</head>

<body class="theme-color-1">
    {{-- header --}}
    @include('frontend.layouts.header')
    
    @yield('content')
    {{-- footer --}}
    @include('frontend.layouts.footer')
    <div id="fb-root"></div>
    <script>
        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            // js.src =
            //     'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js#xfbml=1&version=v2.12&autoLogAppEvents=1';
            // fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
    <!-- Your customer chat code -->
    <div class="fb-customerchat" attribution=setup_tool page_id="2123438804574660" theme_color="#0084ff" logged_in_greeting="Hi! Welcome to PixelStrap Themes  How can we help you?" logged_out_greeting="Hi! Welcome to PixelStrap Themes  How can we help you?">
    </div>
    <!-- facebook chat section end -->


    <!-- tap to top -->
    <div class="tap-top top-cls">
        <div>
            <i class="fa fa-angle-double-up"></i>
        </div>
    </div>
    <!-- tap to top end -->


    <!-- latest jquery-->
    <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>

    <!-- fly cart ui jquery-->
    <script src="{{asset('js/jquery-ui.min.js')}}"></script>

    <!-- exitintent jquery-->
    <script src="{{asset('js/jquery.exitintent.js')}}"></script>
    <script src="{{asset('js/exit.js')}}"></script>

    <!-- slick js-->
    <script src="{{asset('js/slick.js')}}"></script>

    <!-- menu js-->
    <script src="{{asset('js/menu.js')}}"></script>

    <!-- lazyload js-->
    <script src="{{asset('js/lazysizes.min.js')}}"></script>

    <!-- Bootstrap js-->
    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>

    <!-- Bootstrap Notification js-->
    <script src="{{asset('js/bootstrap-notify.min.js')}}"></script>

    <!-- Fly cart js-->
    <script src="{{asset('js/fly-cart.js')}}"></script>

    <!-- Theme js-->
    <script src="{{asset('js/theme-setting.js')}}"></script>
    <script src="{{asset('js/script.js')}}"></script>

    <script>
        $(window).on('load', function() {
            setTimeout(function() {
                $('#exampleModal').modal('show');
            }, 2500);
        });

        function openSearch() {
            document.getElementById("search-overlay").style.display = "block";
        }

        function closeSearch() {
            document.getElementById("search-overlay").style.display = "none";
        }
    </script>

</body>

</html>