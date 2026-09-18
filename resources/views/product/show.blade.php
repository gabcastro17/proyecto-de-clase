@extends('layout.app')

@section('content')

<section class="form-container">

    <h2>Detalle del Producto</h2>

    <div class="product-detail">

        <h3>
            {{ $producto->name }}
        </h3>

        <p>
            <strong>Precio:</strong>
            $ {{ number_format($producto->price, 0, ',', '.') }} COP
        </p>

        <p>
            <strong>Descripción:</strong>
            {{ $producto->description }}
        </p>

        <p>
            <strong>Categoría:</strong>
            {{ $producto->category->name }}
        </p>

        <div class="detail-button">
            <a href="{{ url('/product/index') }}" class="btn-card">
                Volver a Productos
            </a>

        @auth

    <a
        href="{{ url('/product/'.$producto->id.'/edit') }}"
        class="btn-card"
    >
        Editar Producto
    </a>

    <form
        action="{{ url('/product/'.$producto->id) }}"
        method="POST"
    >
        @csrf
        @method('DELETE')

        <button
            type="submit"
            class="btn-card"
            onclick="return confirm('¿Estás segura de que quieres eliminar este producto?')"
        >
            Eliminar Producto
        </button>
    </form>

@endauth