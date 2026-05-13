{{-- resources/views/partials/navbar.blade.php --}}

<style>
    @import url('https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@700;900&family=Barlow:wght@400;500&display=swap');

    :root {
        --ozzy-black: #0a0a0a;
        --ozzy-dark: #141414;
        --ozzy-white: #ffffff;
        --ozzy-gray: #a0a0a0;
        --ozzy-accent: #e8e8e8;
    }

    .ozzy-navbar {
        background-color: var(--ozzy-black);
        border-bottom: 2px solid #1f1f1f;
        padding: 0;
        font-family: 'Barlow Condensed', sans-serif;
        position: sticky;
        top: 0;
        z-index: 1000;
        box-shadow: 0 2px 20px rgba(0,0,0,0.6);
    }

    .ozzy-navbar .container {
        display: flex;
        align-items: center;
        justify-content: space-between;
        height: 64px;
        padding: 0 1.5rem;
    }

    /* BRAND */
    .ozzy-brand {
        text-decoration: none;
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .ozzy-brand-text {
        font-family: 'Barlow Condensed', sans-serif;
        font-weight: 900;
        font-size: 1.75rem;
        letter-spacing: 0.05em;
        color: var(--ozzy-white);
        text-transform: uppercase;
        line-height: 1;
        /* Sombra como en el logo */
        text-shadow: 3px 3px 0px #000, -1px -1px 0 #333;
        transition: color 0.2s;
    }

    .ozzy-brand-text span.ø {
        display: inline-block;
        transform: rotate(-5deg);
    }

    .ozzy-brand:hover .ozzy-brand-text {
        color: var(--ozzy-accent);
    }

    .ozzy-brand-badge {
        font-family: 'Barlow', sans-serif;
        font-size: 0.6rem;
        font-weight: 500;
        color: var(--ozzy-gray);
        text-transform: uppercase;
        letter-spacing: 0.12em;
        border: 1px solid #2a2a2a;
        padding: 2px 6px;
        border-radius: 3px;
        align-self: flex-end;
        margin-bottom: 4px;
    }

    /* NAV LINKS */
    .ozzy-nav {
        display: flex;
        align-items: center;
        gap: 0.25rem;
        list-style: none;
        margin: 0;
        padding: 0;
    }

    .ozzy-nav-link {
        font-family: 'Barlow Condensed', sans-serif;
        font-weight: 700;
        font-size: 1rem;
        letter-spacing: 0.08em;
        text-transform: uppercase;
        color: var(--ozzy-gray);
        text-decoration: none;
        padding: 0.4rem 0.85rem;
        border-radius: 4px;
        transition: color 0.2s, background 0.2s;
        position: relative;
    }

    .ozzy-nav-link::after {
        content: '';
        position: absolute;
        bottom: -2px;
        left: 50%;
        transform: translateX(-50%);
        width: 0;
        height: 2px;
        background: var(--ozzy-white);
        transition: width 0.25s ease;
        border-radius: 2px;
    }

    .ozzy-nav-link:hover {
        color: var(--ozzy-white);
        background: rgba(255,255,255,0.04);
    }

    .ozzy-nav-link:hover::after {
        width: 60%;
    }

    .ozzy-nav-link.active {
        color: var(--ozzy-white);
    }

    .ozzy-nav-link.active::after {
        width: 60%;
    }

    /* Botón "Comprar" destacado */
    .ozzy-nav-link.cta {
        color: var(--ozzy-black);
        background: var(--ozzy-white);
        padding: 0.4rem 1.1rem;
        border-radius: 4px;
        margin-left: 0.5rem;
    }

    .ozzy-nav-link.cta:hover {
        background: var(--ozzy-accent);
        color: var(--ozzy-black);
    }

    .ozzy-nav-link.cta::after {
        display: none;
    }

    /* HAMBURGER mobile */
    .ozzy-hamburger {
        display: none;
        flex-direction: column;
        gap: 5px;
        cursor: pointer;
        background: none;
        border: none;
        padding: 4px;
    }

    .ozzy-hamburger span {
        display: block;
        width: 26px;
        height: 2px;
        background: var(--ozzy-white);
        border-radius: 2px;
        transition: all 0.3s;
    }

    /* MOBILE */
    @media (max-width: 768px) {
        .ozzy-hamburger {
            display: flex;
        }

        .ozzy-nav {
            display: none;
            flex-direction: column;
            align-items: flex-start;
            gap: 0;
            position: absolute;
            top: 64px;
            left: 0;
            right: 0;
            background: var(--ozzy-black);
            border-top: 1px solid #1f1f1f;
            padding: 1rem 1.5rem 1.5rem;
            box-shadow: 0 8px 20px rgba(0,0,0,0.5);
        }

        .ozzy-nav.open {
            display: flex;
        }

        .ozzy-nav-link {
            width: 100%;
            padding: 0.65rem 0;
            border-bottom: 1px solid #1a1a1a;
            font-size: 1.15rem;
        }

        .ozzy-nav-link.cta {
            margin-left: 0;
            margin-top: 0.75rem;
            width: 100%;
            text-align: center;
        }

        .ozzy-nav-link::after {
            display: none;
        }
    }
</style>

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