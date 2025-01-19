<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
</head>
<body>
    <!-- ======= Header ======= -->
    @include('partials.header')

    <!-- ======= Sidebar ======= -->
    @include('partials.sidebar')

    <!-- ======= Main Content ======= -->
    <main id="main" class="main">
        @yield('content')
    </main>

    <!-- ======= Footer ======= -->
    @include('partials.footer')

    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>
</html>