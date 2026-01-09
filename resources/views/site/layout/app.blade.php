<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css" />
    @vite('resources/css/app.css')
    <title>Document</title>
</head>

<body>

    <header>
        @include('site.layout.partials.header')
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        @include('site.layout.partials.footer')
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"></script>
    @stack('custom-scripts')
</body>

</html>
