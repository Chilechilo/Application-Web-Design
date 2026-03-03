<!DOCTYPE html>
<html>
<head>
    <title>Listado Productos</title>
</head>
<body>

<h2>Listado de Productos</h2>

<table class="table" border="1">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Precio</th>
            <th>Categoría</th>
        </tr>
    </thead>
    <tbody>
        @foreach($products as $product)
        <tr>
            <td>{{ $product->nombre }}</td>
            <td>{{ $product->precio }}</td>
            <td>{{ $product->categoria->nombre }}</td>
        </tr>
        @endforeach
    </tbody>
</table>

<br>
<a href="{{ route('products.index') }}">Volver al formulario</a>

</body>
</html>