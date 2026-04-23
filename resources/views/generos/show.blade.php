<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Detalle del Género</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">

<h2>Detalle del Género</h2>

<div class="card p-3">
    <p><strong>ID:</strong> {{ $genero->generoID }}</p>
    <p><strong>Nombre:</strong> {{ $genero->nombre }}</p>
</div>

<a href="{{ route('generos.index') }}" class="btn btn-secondary mt-3">Volver</a>

</body>
</html>