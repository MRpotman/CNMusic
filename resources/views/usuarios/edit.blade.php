<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Usuario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">

<h2>Editar Usuario</h2>

<form action="{{ route('usuarios.update', $usuario->usuarioID) }}" method="POST">
    @csrf
    @method('PUT')

    <input type="text" name="nombre" class="form-control mb-2" value="{{ $usuario->nombre }}" required>
    <input type="email" name="email" class="form-control mb-2" value="{{ $usuario->email }}" required>
    <input type="password" name="contraseña" class="form-control mb-2" placeholder="Nueva contraseña (opcional)">
    <input type="text" name="telefono" class="form-control mb-2" value="{{ $usuario->telefono }}">
    <input type="text" name="direccion" class="form-control mb-2" value="{{ $usuario->direccion }}">

    <button class="btn btn-primary">Actualizar</button>
    <a href="{{ route('usuarios.index') }}" class="btn btn-secondary">Volver</a>
</form>

</body>
</html>