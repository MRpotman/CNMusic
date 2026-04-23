<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Crear Sello</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">

<h2>Crear Sello Discográfico</h2>

<form action="{{ route('sellos.store') }}" method="POST">
    @csrf

    <div class="mb-3">
        <label class="form-label">Nombre</label>
        <input type="text" name="nombre" class="form-control">
        @error('nombre')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <button class="btn btn-primary">Guardar</button>
    <a href="{{ route('sellos.index') }}" class="btn btn-secondary">Cancelar</a>
</form>

</body>
</html>