<header>
        <h1>Glow & Pink</h1>
        <nav>
   <nav>
    <a href="{{ url('/home') }}">Inicio</a>

    <a href="{{ url('/product/index') }}">Catálogo</a>

    @auth
        <a href="{{ url('/product/create') }}">Crear Producto</a>

        <form action="{{ route('logout') }}" method="POST" style="display:inline;">
            @csrf

            <button type="submit" class="nav-link">
                Cerrar sesión
            </button>
        </form>
    @endauth

    @guest
        <a href="{{ route('login') }}">Iniciar Sesión</a>

        <a href="{{ route('register') }}">Registrarse</a>
    @endguest
</nav>
</nav>
</header>