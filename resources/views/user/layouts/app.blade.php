<!DOCTYPE html>
<html>

<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <link rel="icon" href="{{ asset('images/fevicon.png') }}" type="image/gif" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>@yield('title')</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('home/css/bootstrap.css') }}" />

    <!-- Fonts style -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700&display=swap" rel="stylesheet" />

    <!-- Font Awesome style -->
    <link href="{{ asset('home/css/font-awesome.min.css') }}" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="{{ asset('home/css/style.css') }}" rel="stylesheet" />

    <!-- Responsive style -->
    <link href="{{ asset('home/css/responsive.css') }}" rel="stylesheet" />
   
    <!-- Scripts -->

</head>

<body>
    <div class="hero_area">
        <!-- Header section starts -->
        @include('user.layouts.navbar')
        <!-- End header section -->

        <!-- Main content -->
        <main>
            @yield('content')
        </main>
        <!-- End main content -->

        <!-- Footer section -->
        @include('user.layouts.footer')
        <!-- End footer section -->
    </div>

    <!-- jQuery -->
    <script src="{{ asset('home/js/jquery-3.4.1.min.js') }}"></script>
    <!-- Bootstrap JS -->
    <script src="{{ asset('home/js/bootstrap.js') }}"></script>
    <!-- Custom JS -->
    <script src="{{ asset('home/js/custom.js') }}"></script>
    <!-- Google Map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap"></script>
    <!-- End Google Map -->

</body>

</html>
