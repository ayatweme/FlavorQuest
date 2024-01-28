<!-- resources/views/master.blade.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="FlavorQuest">
    <meta name="keywords" content="FlavorQuest">
    <meta name="author" content="FlavorQuest">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>FlavorQuest - @yield('title')</title>
    <link href="{{ asset('assets/images/favicon.ico') }}" rel="shortcut icon" type="image/x-icon">
    <meta name="user-id" content="{{ auth()->id() }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- FlavorQuest External CSS -->
    <link href="{{ asset('assets/css/swiper-bundle.min.css') }}" rel="stylesheet" type="text/css" media="all">
    <link href="{{ asset('assets/css/tastebite-styles.css') }}" rel="stylesheet" type="text/css" media="all">
    <link rel="stylesheet" href="{{ asset('vendor/breeze/css/breeze.css') }}">
    @yield('css')
</head>

<body>
    <x-preloader />
    <section class="tstbite-section p-0">


        <div class="content">

            @yield('content')
            
            @yield('footer')

        </div>
    </section>

    <!-- FlavorQuest Scripts -->
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script src="{{ asset('assets/js/html5.min.js') }}"></script>
    <script src="{{ asset('assets/js/sticky.min.js') }}"></script>
    <script src="{{ asset('assets/js/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/masonry.min.js') }}"></script>
    <script src="{{ asset('assets/js/tastebite-scripts.js') }}"></script>
    <script src="{{ asset('vendor/breeze/js/breeze.js') }}" defer></script>
    @yield('js')
    <!-- resources/views/layouts/app.blade.php or separate JS file -->

<!-- Your other scripts and content -->

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Hide the preloader when the page is fully loaded
        document.querySelector('.preloader-container').style.display = 'none';
    });
</script>

</body>

</html>
