<!doctype html>
<html class="no-js" lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>@yield('title', 'My Laravel App')</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

    <!-- Summernote -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('assetsofdash/images/Red and Black Modern Creative Agency Logo-old.png') }}" type="image/x-icon">

    <!-- Local CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/plugin.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/theme.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/collection.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/blog.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">

    @stack('styles')

    <style>
        .preloader-img{
            height: 80px;
            width: 200px;
        }
    </style>
</head>

<body>

    {{-- Header --}}
    @include('partials.frontheader')


       {{-- preloader start --}}
      <div class="preloader position-fixed top-0 start-0 w-100 h-100 body-bg z-index-5">
            <div class="loader-img position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center">
                <img src="{{ asset('assetsofdash/images/Red and Black Modern Creative Agency Logo-old.png') }}" class="width-88 width-xl-112 img-fluid preloader-img" alt="logo">
            </div>
        </div>
        {{-- preloader end --}}


          {{-- Page Content --}}
    @yield('content')


    {{-- Extra Section --}}
    @include('partials.extra')

    {{-- Footer --}}
    @include('partials.frontfooter')

    <!-- JS Files -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Core JS -->
    <script src="{{ asset('assets/js/plugin.js') }}"></script>
    <script src="{{ asset('assets/js/theme.js') }}"></script>

    <!-- Dashboard libs -->
    <script src="{{ asset('assetsofdash/bundles/libscripts.bundle.js') }}"></script>
    <script src="{{ asset('assets/bundles/apexcharts.bundle.js') }}"></script>
    <script src="{{ asset('assets/bundles/dataTables.bundle.js') }}"></script>

    <!-- Template JS -->
    <script src="{{ asset('js/template.js') }}"></script>
    <script src="{{ asset('js/page/index.js') }}"></script>

    <!-- Google Maps (external URL must not use asset()) -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB1Jr7axGGkwvHRnNfoOzoVRFV3yOPHJEU&callback=myMap"></script>

    <!-- DataTable Init -->
    <script>
        $(document).ready(function () {
            if ($('#myDataTable').length) {
                $('#myDataTable').addClass('nowrap').dataTable({
                    responsive: true,
                    columnDefs: [
                        { targets: [-1, -3], className: 'dt-body-right' }
                    ]
                });
            }
        });
    </script>

    @stack('scripts')

</body>
</html>
