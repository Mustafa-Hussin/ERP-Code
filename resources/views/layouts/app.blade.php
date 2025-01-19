<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Frontend Assets -->
    @foreach($frontendAssets['styles'] as $style)
        <link href="{{ $style }}" rel="stylesheet">
    @endforeach

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

    <!-- Frontend Scripts -->
    @foreach($frontendAssets['scripts'] as $script)
        @if(is_array($script))
            @foreach($script as $subScript)
                <script src="{{ $subScript }}"></script>
            @endforeach
        @else
            <script src="{{ $script }}"></script>
        @endif
    @endforeach

    <!-- Initialize Frontend Libraries -->
    <script>
        // Toastr Configuration
        toastr.options = {
            closeButton: true,
            progressBar: true,
            positionClass: 'toast-top-right',
            timeOut: 5000
        };

        // Dropzone Configuration
        Dropzone.autoDiscover = false;

        // SweetAlert2 Default Configuration
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000
        });

        // Display Laravel Flash Messages
        @if(session('success'))
            toastr.success('{{ session('success') }}');
        @endif

        @if(session('error'))
            toastr.error('{{ session('error') }}');
        @endif

        @if(session('warning'))
            toastr.warning('{{ session('warning') }}');
        @endif

        @if(session('info'))
            toastr.info('{{ session('info') }}');
        @endif
    </script>
</body>
</html>