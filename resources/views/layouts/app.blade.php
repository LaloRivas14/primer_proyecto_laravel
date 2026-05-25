<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {{-- El título cambia en cada vista. Si no se define, muestra "Ozzy Sublimado" --}}
    <title>@yield('title', 'Ozzy Sublimado')</title>

    {{-- CSS global: Bootstrap u otros que uses en todo el sitio --}}
    {{-- <link rel="stylesheet" href="{{ asset('css/app.css') }}"> --}}

    {{-- Cada vista puede agregar su propio CSS acá --}}
    @stack('styles')
</head>
<body>

    {{-- Navbar: se carga en todas las páginas automáticamente --}}
    @include('partials.barra-nav')

    {{-- Contenido único de cada vista --}}
    @yield('content')

    {{-- Cada vista puede agregar su propio JS acá --}}
    @stack('scripts')

</body>
</html>