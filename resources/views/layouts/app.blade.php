<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">

    <title>School Management</title>

    <meta name="description" content="School Management">
    <meta name="author" content="pixelcave">
    <meta name="robots" content="noindex, nofollow">

    <!-- Open Graph Meta -->
    <meta property="og:title" content="School Management">
    <meta property="og:site_name" content="School Management">
    <meta property="og:description" content="School Management">
    <meta property="og:type" content="website">
    <meta property="og:url" content="">
    <meta property="og:image" content="">

    {{-- CSS Files --}}
    @include('layouts.partials.style')

</head>
<body>
    <div id="page-container" class="sidebar-o sidebar-dark enable-page-overlay side-scroll page-header-fixed main-content-narrow">

        {{-- Side Overlay --}}
        @include('layouts.partials.sideOverlay')

        {{-- Sidebar --}}

        @include('layouts.partials.sidebar')

        {{-- Header --}}

        @include('layouts.partials.header')

        {{-- Footer --}}

        @include('layouts.partials.footer')

        {{-- Main Container --}}
        @yield('content')

    </div>

    {{-- Scripts Files --}}
    @include('layouts.partials.scripts')



</body>
</html>

