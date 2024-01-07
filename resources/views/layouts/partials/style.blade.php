<!-- Icons -->
<!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
<link rel="shortcut icon" href="{{asset("assets/media/favicons/favicon.png")}}">
<link rel="icon" type="image/png" sizes="192x192" href="{{asset('assets/media/favicons/favicon-192x192.png')}}">
<link rel="apple-touch-icon" sizes="180x180" href="{{asset('assets/media/favicons/apple-touch-icon-180x180.png')}}">
<!-- END Icons -->

<!-- Stylesheets -->
<!-- OneUI framework -->
<link rel="stylesheet" id="css-main" href="{{asset('assets/css/oneui.min.css')}}">

 <!-- SweetAlert2 css -->
 <link rel="stylesheet" href="{{ asset('assets/css/sweetalert2.min.css') }}">

 <!-- select2 css  -->
<link rel="stylesheet" href="{{ asset('assets/js/plugins/select2/css/select2.min.css') }}">
<link rel="stylesheet" id="css-main" href="{{asset('assets/css/style.css')}}">

<!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
<!-- <link rel="stylesheet" id="css-theme" href="assets/css/themes/amethyst.min.css"> -->
<!-- END Stylesheets -->
@stack('page-styles')
