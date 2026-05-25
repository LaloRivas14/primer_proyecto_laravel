{{-- resources/views/partials/navbar.blade.php --}}

<link rel="stylesheet" href="{{ asset('CSS/barra-nav.css') }}">
<nav class="ozzy-navbar">
    <div class="container">

        {{-- BRAND --}}
        <a class="ozzy-brand" href="/">
            <span class="ozzy-brand-text">Øzzy</span>
            <span class="ozzy-brand-badge">Sublimados</span>
        </a>

        {{-- HAMBURGER (mobile) --}}
        <button class="ozzy-hamburger" id="ozzy-toggle" aria-label="Menú">
            <span></span>
            <span></span>
            <span></span>
        </button>

        {{-- LINKS --}}
        <ul class="ozzy-nav" id="ozzy-nav">
            <li>
                <a class="ozzy-nav-link {{ request()->is('/') ? 'active' : '' }}"
                   href="/">Inicio</a>
            </li>
            <li>
                <a class="ozzy-nav-link {{ request()->is('quienes_somos') ? 'active' : '' }}"
                   href="/quienes_somos">Sobre Ozzy</a>
            </li>
            <li>
                <a class="ozzy-nav-link {{ request()->is('contactanos') ? 'active' : '' }}"
                   href="/contactanos">Contactanos</a>
            </li>
            <li>
                <a class="ozzy-nav-link {{ request()->is('terminos-y-uso') ? 'active' : '' }}"
                   href="/terminos-y-uso">Términos</a>
            </li>
            <li>
                <a class="ozzy-nav-link cta" href="/comprar">Comprar</a>
            </li>
        </ul>

    </div>
</nav>

<script>
    document.getElementById('ozzy-toggle').addEventListener('click', function () {
        document.getElementById('ozzy-nav').classList.toggle('open');
    });
</script>