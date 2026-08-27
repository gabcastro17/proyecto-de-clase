@extends('layout.app')

@section('content')
           <section class="product-detail-container">
            <!-- Columna de la Imagen -->
            <div class="product-image-box">
                <img src="https://beautyface.com.co/cdn/shop/files/239985621.webp?v=1774384814&width=1024" alt="Dior Addict Lip Glow">
            </div>

            <!-- Columna de Información -->
            <div class="product-info">
                <span class="brand-tag">Dior</span>
                <h2 class="product-title">Dior Addict Lip Glow</h2>
                <p class="product-price">$ 230.900 COP</p>
                
                <p class="product-description">
                    El primer bálsamo de labios Dior formulado con un 97% de ingredientes de origen natural. 
                    Realza sutilmente el color natural de los labios con un brillo a medida durante 6 horas 
                    y los mantiene hidratados durante 24 horas. Formulado con aceite de cereza para una nutrición intensa y confort absoluto.
                </p>

                <!-- Botón Añadir al Carrito con Ícono de Carrito -->
                <button type="button" class="btn-add-cart">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path d="M7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zM1 2v2h2l3.6 7.59-1.35 2.45c-.16.28-.25.61-.25.96 0 1.1.9 2 2 2h12v-2H7.42c-.14 0-.25-.11-.25-.25l.03-.12.9-1.63h7.45c.75 0 1.41-.41 1.75-1.03l3.58-6.49c.08-.14.12-.31.12-.48 0-.55-.45-1-1-1H5.21l-.94-2H1zm16 16c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2z"/>
                    </svg>
                    Añadir al Carrito
                </button>
            </div>
        </section>
@endsection
   
