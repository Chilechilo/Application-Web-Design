<!DOCTYPE html>
<html>
<head>
    <title>Formulario Producto</title>
</head>
<body>

<h2>Nuevo Producto</h2>

<form action="{{ route('products.store') }}" method="POST">
    @csrf

    <div>
        <label>Nombre:</label>
        <input type="text" name="nombre" required>
    </div>

    <div>
        <label>Precio:</label>
        <input type="number" step="0.01" name="precio" required>
    </div>

    <div>
        <label>Categoría:</label>
        <select name="categoria_id" required>
            <option value="">Seleccionar</option>
            @foreach($categorias as $categoria)
                <option value="{{ $categoria->id }}">
                    {{ $categoria->nombre }}
                </option>
            @endforeach
        </select>
    </div>

    <button type="submit">Guardar</button>

</form>

</body>
</html>