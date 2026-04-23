<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Detalle del Sello</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">

<h2>Detalle del Sello</h2>

<div class="card p-3">
    <p><strong>ID:</strong> {{ $sello->selloDiscograficoID }}</p>
    <p><strong>Nombre:</strong> {{ $sello->nombre }}</p>
</div>

<a href="{{ route('sellos.index') }}" class="btn btn-secondary mt-3">Volver</a>

</body>
</html>