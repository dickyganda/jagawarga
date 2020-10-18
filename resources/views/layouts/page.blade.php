<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <meta name="csrf-token" content="{{ csrf_token()}}"> <!-- Security Laravel -->

    <title>@yield('title')Jaga Warga &mdash; </title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">

    <!-- CSS Libraries -->

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/components.css') }}">
    @stack('styles')
</head>

<body>
    <div id="app">
        <div class="main-wrapper">
            @include('layouts/header')
            @include('layouts/sidebar')

            <!-- Main Content -->
            <div class="main-content">
                <section class="section">
                    @yield('content')
                </section>
            </div>
@include('layouts/footer')
        </div>
    </div>

    <!-- General JS Scripts -->
    <script src="{{ asset('assets/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.nicescroll.min.js') }}"></script>
    <script src="{{ asset('assets/js/moment.min.js') }}"></script>
    <script src="{{ asset('assets/js/stisla.js') }}"></script>

    <!-- JS Libraies -->
    <script src="{{ asset('assets/js/sweetalert2.js') }}"></script>
    <!-- Template JS File -->
    <script src="{{ asset('assets/js/scripts.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>

    <!-- Page Specific JS File -->

    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

    </script>

    @stack('scripts')
</body>

</html>
