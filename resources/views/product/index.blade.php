@extends('layout.app')

@section('content')

<h2 class="title">Colección Exclusiva Dior</h2>

<div class="products-grid">

    @foreach($listaDeProductos as $producto)

        <article class="product-card">

            <span class="product-brand">
                Producto
            </span>

            <h3 class="product-name">
                {{ $producto->name }}
            </h3>

            <p class="product-price">
                $ {{ number_format($producto->price, 0, ',', '.') }} COP
            </p>

            <a
                href="{{ url('/product/'.$producto->id) }}"
                class="btn-card"
            >
                Ver Detalle
            </a>

        </article>

    @endforeach

</div>

@endsection



   