@extends('layout.app')

@section('content')
<h2 class="title">Colección Exclusiva Dior</h2>

        <div class="products-grid">
            
            @foreach($listaDeProductos as $producto)
            <!-- Producto 1 -->
            <article class="product-card">
                <img class="product-image" src="https://beautyface.com.co/cdn/shop/files/239985621.webp?v=1774384814&width=1024" alt="Dior Addict Lip Glow">
                <span class="product-brand">Dior</span>
                <h3 class="product-name">Dior Addict Lip Glow</h3>
                <p class="product-price">$ 230.900 COP</p>
                <button type="button" class="btn-card">Ver Detalle</button>
            </article>
            @endforeach
        

          

        </div>
    
@endsection




   