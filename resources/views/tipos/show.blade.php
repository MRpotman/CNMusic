<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Detalle Tipo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">

<h2>Detalle del Tipo</h2>

<ul class="list-group">
    <li class="list-group-item"><strong>ID:</strong> {{ $tipo->tipoProductoID }}</li>
    <li class="list-group-item"><strong>Nombre:</strong> {{ $tipo->nombre }}</li>
    <li class="list-group-item"><strong>Descripción:</strong> {{ $tipo->descripcion }}</li>
</ul>

<a href="{{ route('tipos.index') }}" class="btn btn-secondary mt-3">Volver</a>

</body>
</html>