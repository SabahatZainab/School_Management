<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- CSS Files -->
	@include('layouts.partials.style_sheets')
	<title>School Management</title>
</head>
<body class="">
	<!--wrapper-->
	<div class="wrapper">
		@yield('content')
	</div>
	<!--end wrapper-->
	<!-- Scripts Files-->
	@include('layouts.partials.auth_scripts')
</body>
</html>
