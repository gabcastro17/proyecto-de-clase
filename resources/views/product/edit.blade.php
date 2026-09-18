@extends('layout.app')

@section('content')

<section class="form-container">

    <h2>Editar Producto</h2>

    <form action="{{ url('/product/'.$producto->id) }}" method="POST">

        @csrf
        @method('PUT')

        <div class="form-group">

            <label for="nombre">Nombre del Producto:</label>

            <input
                type="text"
                id="nombre"
                name="name"
                value="{{ old('name', $producto->name) }}"
            >

            @error('name')
                <small style="color:red;">
                    {{ $message }}
                </small>
            @enderror

        </div>

        <div class="form-group">

            <label for="precio">Precio ($):</label>

            <input
                type="number"
                id="precio"
                name="price"
                step="0.01"
                value="{{ old('price', $producto->price) }}"
            >

            @error('price')
                <small style="color:red;">
                    {{ $message }}
                </small>
            @enderror

        </div>

        <div class="form-group">

            <label for="categoria">Categoría:</label>

            <select id="categoria" name="category_id">

                <option value="">
                    Selecciona una categoría
                </option>

                @foreach($categorias as $categoria)

                    <option
                        value="{{ $categoria->id }}"
                        {{ old('category_id', $producto->category_id) == $categoria->id ? 'selected' : '' }}
                    >
                        {{ $categoria->name }}
                    </option>

                @endforeach

            </select>

            @error('category_id')
                <small style="color:red;">
                    {{ $message }}
                </small>
            @enderror

        </div>

        <div class="form-group">

            <label for="descripcion">Descripción:</label>

            <textarea
                id="descripcion"
                name="description"
            >{{ old('description', $producto->description) }}</textarea>

            @error('description')
                <small style="color:red;">
                    {{ $message }}
                </small>
            @enderror

        </div>

        <button type="submit" class="btn-submit">
            Actualizar Producto
        </button>

    </form>

</section>

@endsection