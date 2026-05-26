<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Ozzy Sublimado')</title>

    @stack('styles')
</head>
<body>

    @include('partials.barra-nav')

    @yield('content')

    @stack('scripts')

</body>
</html>