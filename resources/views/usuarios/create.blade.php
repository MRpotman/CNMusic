<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Crear Usuario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">

<h2>Crear Usuario</h2>

{{-- Mostrar errores de validación --}}
@if ($errors->any())
    <div class="alert alert-danger">
        <ul class="mb-0">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('usuarios.store') }}" method="POST">
    @csrf

    <input type="text" name="nombre" class="form-control mb-2" placeholder="Nombre"
        value="{{ old('nombre') }}" required>

    <input type="email" name="email" class="form-control mb-2" placeholder="Email"
        value="{{ old('email') }}" required>

    <input type="password" name="password" class="form-control mb-2" placeholder="Contraseña" required>

    <input type="text" name="telefono" class="form-control mb-2" placeholder="Teléfono"
        value="{{ old('telefono') }}">

    <input type="text" name="direccion" class="form-control mb-2" placeholder="Dirección"
        value="{{ old('direccion') }}">

    <button class="btn btn-success">Guardar</button>
    <a href="{{ route('usuarios.index') }}" class="btn btn-secondary">Volver</a>
</form>

</body>
</html>