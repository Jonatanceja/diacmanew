<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" sizes="180x180" href="/images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/images/favicon-16x16.png">
    <link rel="manifest" href="/images/site.webmanifest">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <title>{{ $site->title() }} | {{ $page->title() }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="/resources/css/animate.css">
    <link rel="stylesheet" href="https://cdn.lineicons.com/4.0/lineicons.css" />
    <script
      src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.3.5/dist/alpine.min.js"
      defer
    ></script>
    @stack('styles')
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;700&display=swap');

        h1, h2, h3, h4, h5, h6, li, p {
        font-family: Montserrat;
        }

        .swiper-button-prev, .swiper-button-next  {
        color: white;
        }

        .swiper-pagination-bullet-active {
        background: rgba(245, 158, 11);
        }

        .swiper-pagination-bullet-inactive {
        background: rgba(255, 255, 255);
        }

        .swiper-container {
        width: 100%;
        height: 100%;
        }

        .swiper-slide {
        height: 315px;
        }

        .swiper-pagination {
        position: absolute;
        }
    </style>
    <script src="/resources/js/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>
</head>

<body>
    @include('partials.whatsapp')
    @include('partials.nav')
    @yield('content')
    @include('partials.footer')
    @stack('scripts')
</body>

</html>
