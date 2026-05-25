@extends('layouts.app')

@section('title', 'Sobre Ozzy')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/quienes-somos.css') }}?>v=2">
@endpush

@section('content')

{{-- ══ HERO ══ --}}
<section class="about-hero">
    <div class="about-hero-inner">
        <span class="about-hero-tag">Quiénes somos</span>
        <h1>Somos <span>Øzzy</span></h1>
        <p>Un emprendimiento de dos personas con una idea simple: que cada prenda cuente algo tuyo.</p>
    </div>
</section>

{{-- ══ SECCIÓN PRINCIPAL ══ --}}
<section class="about-section">
    <div class="about-container">

        {{-- COLUMNA IZQUIERDA: logo --}}
        <div class="about-image">
            <img src="{{ asset('images/icons/ozzy-logo.png') }}" alt="Ozzy logo">
        </div>

        {{-- COLUMNA DERECHA: texto --}}
        <div class="about-text">

            <span class="about-label">Nuestra historia</span>

            <h2>Tu estilo, <br>donde vayas</h2>

            <p>
                Somos Ozzy, un emprendimiento familiar de sublimado y venta de indumentaria.
                Nacimos con el objetivo de impulsarte a llevar tu propio estilo a todos lados —
                ya sea con un diseño tuyo o con alguno de los que encontrás en nuestros productos.
            </p>

            <p>
                Desde remeras y buzos hasta gorras y tazas, podés darle tu toque único
                a lo que más querés. Trabajamos con dedicación en cada pedido porque
                sabemos que detrás de cada diseño hay algo que te importa.
            </p>

            <p>
                No dudes en contactarnos — estamos para ayudarte a encontrar
                y llevar tu propio estilo.
            </p>

            <a href="/contactanos" class="about-cta">Contactanos</a>

        </div>

    </div>
</section>

{{-- ══ FRANJA DE VALORES ══ --}}
<section class="about-values">
    <div class="about-values-grid">

        <div class="about-value">
            <span class="about-value-number">01</span>
            <h3>Personalización</h3>
            <p>Tu diseño o el nuestro — la prenda se adapta a lo que vos imaginás.</p>
        </div>

        <div class="about-value">
            <span class="about-value-number">02</span>
            <h3>Dedicación</h3>
            <p>Somos dos personas que le ponemos el cuerpo a cada pedido.</p>
        </div>

        <div class="about-value">
            <span class="about-value-number">03</span>
            <h3>Variedad</h3>
            <p>Remeras, buzos, gorras, tazas y más — todo con sublimado de calidad.</p>
        </div>

    </div>
</section>

@endsection