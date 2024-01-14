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
    <!-- FlavorQuest External CSS -->
    <link href="{{ asset('assets/css/swiper-bundle.min.css') }}" rel="stylesheet" type="text/css" media="all">
    <link href="{{ asset('assets/css/tastebite-styles.css') }}" rel="stylesheet" type="text/css" media="all">
    <link rel="stylesheet" href="{{ asset('vendor/breeze/css/breeze.css') }}">
    @yield('css')
</head>

<body>
    <section class="tstbite-section p-0">


        <div class="content">

            @yield('content')
            
            @yield('footer')

        </div>
    </section>

    <!-- FlavorQuest Scripts -->
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/html5.min.js') }}"></script>
    <script src="{{ asset('assets/js/sticky.min.js') }}"></script>
    <script src="{{ asset('assets/js/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/masonry.min.js') }}"></script>
    <script src="{{ asset('assets/js/tastebite-scripts.js') }}"></script>
    <script src="{{ asset('vendor/breeze/js/breeze.js') }}" defer></script>
    @yield('js')
</body>

</html>
