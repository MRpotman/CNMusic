<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Detalle Usuario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">

<h2>Detalle del Usuario</h2>

<ul class="list-group">
    <li class="list-group-item"><strong>ID:</strong> {{ $usuario->usuarioID }}</li>
    <li class="list-group-item"><strong>Nombre:</strong> {{ $usuario->nombre }}</li>
    <li class="list-group-item"><strong>Email:</strong> {{ $usuario->email }}</li>
    <li class="list-group-item"><strong>Teléfono:</strong> {{ $usuario->telefono }}</li>
    <li class="list-group-item"><strong>Dirección:</strong> {{ $usuario->direccion }}</li>
</ul>

<a href="{{ route('usuarios.index') }}" class="btn btn-secondary mt-3">Volver</a>

</body>
</html>