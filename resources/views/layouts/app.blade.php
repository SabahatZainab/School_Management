<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<title>School Management</title>

	{{-- CSS Files --}}
	@include('layouts.partials.style_sheets')
</head>
<body>
	<!--wrapper-->
	<div class="wrapper">
		<!--sidebar wrapper -->
			@include('layouts.partials.sidebar')
		<!--end sidebar wrapper -->
		<!--start header -->
			@include('layouts.partials.header')
		<!--end header -->
	</div>
		<!--start page wrapper -->
			@yield('content')
	{{-- Scripts Files --}}
	@include('layouts.partials.scripts')
</body>
</html>
