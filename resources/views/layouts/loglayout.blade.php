<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- Icon web --}}
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('img/rumah.png') }}">
	<!-- Fonts and icons -->
	<script src="{{ asset('vendor/login/js/plugin/webfont/webfont.min.js') }}"></script>
	<!-- CSS Files -->
	<link rel="stylesheet" href="{{ asset('vendor/login/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('vendor/login/css/azzara.min.css') }}">
    <title>@yield('title')</title>
</head>
<body class="login">
    {{-- This For Content --}}
        @yield('content')
    {{-- End Content --}}
    {{-- Js script --}}
	<script src="{{ asset('vendor/login/js/core/jquery.3.2.1.min.js') }}"></script>
	<script src="{{ asset('vendor/login/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js') }}"></script>
	<script src="{{ asset('vendor/login/js/core/popper.min.js') }}"></script>
	<script src="{{ asset('vendor/login/js/core/bootstrap.min.js') }}"></script>
    <script src="{{ asset('vendor/login/js/ready.js') }}"></script>
    {{-- End Script src --}}
</body>
</html>
