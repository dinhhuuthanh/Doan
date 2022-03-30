<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Multikart admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords"
        content="admin template, Multikart admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="{{ asset('img/dashboard/favicon.png') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('img/dashboard/favicon.png') }}" type="image/x-icon">
    <title>Multikart - Premium Admin Template</title>

    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Font Awesome-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/vendors/fontawesome.css') }}">

    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/vendors/flag-icon.css') }}">

    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/vendors/icofont.css') }}">

    <!-- Prism css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/vendors/prism.css') }}">

    <!-- Chartist css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/vendors/chartist.css') }}">

    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/vendors/bootstrap.css') }}">

    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/admin.css') }}">
</head>

<body>

    <!-- page-wrapper Start-->
    <div class="page-wrapper">
        @include('backend.layouts.header')
        <div class="page-body-wrapper">
            @include('backend.layouts.sidebar')
            <!-- Container-fluid starts-->
          
                <div class="page-header">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="page-header-left">
                                <h3>Dashboard
                                    <small>Multikart Admin panel</small>
                                </h3>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <ol class="breadcrumb pull-right">
                                <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                                <li class="breadcrumb-item active">Dashboard</li>
                            </ol>
                        </div>
                    </div>
                </div>
                @yield('content')
               
          
            <!-- Container-fluid Ends-->




            @include('backend.layouts.footer')


        </div>
   
        <!-- latest jquery-->
        <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>

        <!-- Bootstrap js-->
        <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>

        <!-- feather icon js-->
        <script src="{{ asset('js/icons/feather-icon/feather.min.js') }}"></script>
        <script src="{{ asset('js/icons/feather-icon/feather-icon.js') }}"></script>

        <!-- Sidebar jquery-->
        <script src="{{ asset('js/sidebar-menu.js') }}"></script>

        <!--chartist js-->
        <script src="{{ asset('js/chart/chartist/chartist.js') }}"></script>

        <!--chartjs js-->
        <script src="{{ asset('js/chart/chartjs/chart.min.js') }}"></script>

        <!-- lazyload js-->
        <script src="{{ asset('js/lazysizes.min.js') }}"></script>

        <!--copycode js-->
        <script src="{{ asset('js/prism/prism.min.js') }}"></script>
        <script src="{{ asset('js/clipboard/clipboard.min.js') }}"></script>
        <script src="{{ asset('js/custom-card/custom-card.js') }}"></script>

        <!--counter js-->
        <script src="{{ asset('js/counter/jquery.waypoints.min.js') }}"></script>
        <script src="{{ asset('js/counter/jquery.counterup.min.js') }}"></script>
        <script src="{{ asset('js/counter/counter-custom.js') }}"></script>

        <!--peity chart js-->
        <script src="{{ asset('js/chart/peity-chart/peity.jquery.js') }}"></script>

        <!--sparkline chart js-->
        <script src="{{ asset('js/chart/sparkline/sparkline.js') }}"></script>



        <!--dashboard custom js-->
        <script src="{{ asset('js/dashboard/default.js') }}"></script>

        <!--right sidebar js-->
        <script src="{{ asset('js/chat-menu.js') }}"></script>

        <!--height equal js-->
        <script src="{{ asset('js/height-equal.js') }}"></script>

        <!-- lazyload js-->
        <script src="{{ asset('js/lazysizes.min.js') }}"></script>

        <!--script admin-->
        <script src="{{ asset('js/admin-script.js') }}"></script>

</body>

</html>
