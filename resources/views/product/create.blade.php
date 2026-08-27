@extends('layout.app')

@section('content')
        <section class="form-container">
            <h2>Registrar Nuevo Producto</h2>
            
            <form action="#" method="post">
                <!-- ID del Producto -->
                <div class="form-group">
                    <label for="id-producto">ID del Producto:</label>
                    <input type="text" id="id-producto" name="id-producto" placeholder="Ej. PROD-001">
                </div>

                <!-- Nombre -->
                <div class="form-group">
                    <label for="nombre">Nombre del Producto:</label>
                    <input type="text" id="nombre" name="nombre" placeholder="Ej. Labial Mate Rosa Pastel">
                </div>

                <!-- Precio -->
                <div class="form-group">
                    <label for="precio">Precio ($):</label>
                    <input type="number" id="precio" name="precio" step="0.01" placeholder="0.00">
                </div>

                <!-- Categoría -->
                <div class="form-group">
                    <label for="categoria">Categoría:</label>
                    <select id="categoria" name="categoria">
                        <option value="">Selecciona una categoría</option>
                        <option value="labios">Labios</option>
                        <option value="ojos">Ojos</option>
                        <option value="rostro">Rostro</option>
                        <option value="skincare">Cuidado de la Piel</option>
                        <option value="brochas">Brochas y Accesorios</option>
                    </select>
                </div>

                <!-- URL de Imagen -->
                <div class="form-group">
                    <label for="url-imagen">URL de la Imagen:</label>
                    <input type="url" id="url-imagen" name="url-imagen" placeholder="https://ejemplo.com/imagen.jpg">
                </div>

                <!-- Descripción -->
                <div class="form-group">
                    <label for="descripcion">Descripción:</label>
                    <textarea id="descripcion" name="descripcion" placeholder="Escribe los detalles, beneficios e ingredientes del producto..."></textarea>
                </div>

                <!-- Botón no funcional -->
                <button type="button" class="btn-submit">Guardar Producto</button>
            </form>
        </section>
@endsection 
    
