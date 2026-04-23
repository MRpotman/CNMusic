<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Detalle Carrito</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">

<h2>Detalle del Carrito</h2>

<div class="card p-3">
    <p><b>ID:</b> {{ $carrito->carritoID }}</p>
    <p><b>Usuario:</b> {{ $carrito->usuario->nombre ?? 'N/A' }}</p>
    <p><b>Total:</b> {{ $carrito->total }}</p>
    <p><b>Fecha:</b> {{ $carrito->fechaCreacion }}</p>
</div>

<hr>

<h4>Items del carrito</h4>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>Producto</th>
            <th>Cantidad</th>
            <th>Precio</th>
        </tr>
    </thead>
    <tbody>
        @foreach($carrito->items as $item)
        <tr>
            <td>{{ $item->producto->nombre ?? 'N/A' }}</td>
            <td>{{ $item->cantidad }}</td>
            <td>{{ $item->precioUnitario }}</td>
        </tr>
        @endforeach
    </tbody>
</table>

<a href="{{ route('carrito-compras.index') }}" class="btn btn-secondary">Volver</a>

</body>
</html>