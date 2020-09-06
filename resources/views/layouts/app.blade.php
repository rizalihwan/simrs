<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <!-- VENDOR CSS -->
	<link rel="stylesheet" href="{{ asset('vendor/page/vendor/bootstrap/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('vendor/page/vendor/font-awesome/css/font-awesome.min.css') }}">
	<link rel="stylesheet" href="{{ asset('vendor/page/vendor/linearicons/style.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/page/vendor/chartist/css/chartist-custom.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/index.css') }}">
	<!-- MAIN CSS -->
    <link rel="stylesheet" href="{{ asset('vendor/page/css/main.css') }}">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="{{ asset('vendor/page/css/demo.css') }}">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('vendor/page/img/apple-icon.png') }}">
	<link rel="icon" type="image/png" sizes="96x96" href="{{ asset('vendor/page/img/favicon.png') }}">
</head>
<body>
    <!-- WRAPPER -->
        <div id="wrapper">
            {{-- Navbar start --}}
                @include('layouts.partials.navbar')
            {{-- End Navbar --}}

                {{-- Navbar start --}}
                    @include('layouts.partials.left_sidebar')
                {{-- End Navbar --}}

            <!-- MAIN -->
            <div class="main">
                {{-- This For Content --}}
                    @yield('content')
                {{-- End Content --}}
            </div>
            <!-- END MAIN -->
            <div class="clearfix"></div>
            {{-- Footer start --}}
                @include('layouts.partials.footer')
            {{-- End Footer --}}
        </div>
    <!-- END WRAPPER -->
    {{-- Javascript --}}
    <script src="{{ asset('vendor/page/vendor/jquery/jquery.min.js') }}"></script>
	<script src="{{ asset('vendor/page/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('vendor/page/vendor/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
	<script src="{{ asset('vendor/page/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js') }}"></script>
	<script src="{{ asset('vendor/page/vendor/chartist/js/chartist.min.js') }}"></script>
    <script src="{{ asset('vendor/page/scripts/klorofil-common.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
