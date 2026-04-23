<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Detalle Artista</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">

<h2>Detalle del Artista</h2>

<ul class="list-group">
    <li class="list-group-item"><strong>ID:</strong> {{ $artista->artistaID }}</li>
    <li class="list-group-item"><strong>Nombre:</strong> {{ $artista->nombre }}</li>
    <li class="list-group-item"><strong>Nacionalidad:</strong> {{ $artista->nacionalidad }}</li>
    <li class="list-group-item">
        <strong>Sello:</strong> {{ $artista->selloDiscografico->nombre ?? 'Sin sello' }}
    </li>
</ul>

<a href="{{ route('artistas.index') }}" class="btn btn-secondary mt-3">Volver</a>

</body>
</html>