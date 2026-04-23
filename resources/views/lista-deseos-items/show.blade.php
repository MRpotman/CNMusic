<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Detalle Item</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">

<h2>Detalle</h2>

<ul class="list-group">
    <li class="list-group-item"><b>ID:</b> {{ $item->itemListaID }}</li>
    <li class="list-group-item"><b>Lista:</b> {{ $item->listaDeseos->nombre ?? '' }}</li>
    <li class="list-group-item"><b>Producto:</b> {{ $item->producto->nombre ?? '' }}</li>
    <li class="list-group-item"><b>Fecha:</b> {{ $item->fechaAgregado }}</li>
</ul>

<a href="{{ route('lista-deseos-items.index') }}" class="btn btn-secondary mt-3">Volver</a>

</body>
</html>