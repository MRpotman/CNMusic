<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Detalle Producto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">

<h2>Detalle Producto</h2>

<ul class="list-group">
    <li class="list-group-item"><b>Nombre:</b> {{ $producto->nombre }}</li>
    <li class="list-group-item"><b>Álbum:</b> {{ $producto->album }}</li>
    <li class="list-group-item"><b>Precio:</b> {{ $producto->precio }}</li>
    <li class="list-group-item"><b>Stock:</b> {{ $producto->stock }}</li>
    <li class="list-group-item"><b>Artista:</b> {{ $producto->artista->nombre ?? '' }}</li>
    <li class="list-group-item"><b>Género:</b> {{ $producto->genero->nombre ?? '' }}</li>
    <li class="list-group-item"><b>Tipo:</b> {{ $producto->tipoProducto->nombre ?? '' }}</li>
</ul>

<a href="{{ route('productos.index') }}" class="btn btn-secondary mt-3">Volver</a>

</body>
</html>