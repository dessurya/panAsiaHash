<!DOCTYPE html>
<html>
<head>

@yield('title')

	<meta charset="utf-8">
	<meta http-equiv="Content-Language" content="{{ App::getLocale() }}" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

@yield('meta')
	<link rel="icon" type="image/png" href="{{ asset('assets/images-base/logo-pah.png') }}" />

	<link rel="stylesheet" type="text/css" href="{{ asset('assets/plugin/font-awesome/css/font-awesome.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/font/font.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/public.css') }}">
@yield('style')

</head>
<body>

		@include('frontend._include.navigasi')
@yield('body')

		@include('frontend._include.footer')
	<script type="text/javascript" src="{{ asset('assets/plugin/jquery/jquery-3.2.0.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/js/public.js') }}"></script>
@yield('script')
</body>
</html>