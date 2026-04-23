<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Tipo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">

<h2>Editar Tipo</h2>

<form action="{{ route('tipos.update', $tipo->tipoProductoID) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label>Nombre</label>
        <input type="text" name="nombre" class="form-control" value="{{ $tipo->nombre }}" required>
    </div>

    <div class="mb-3">
        <label>Descripción</label>
        <textarea name="descripcion" class="form-control">{{ $tipo->descripcion }}</textarea>
    </div>

    <button class="btn btn-primary">Actualizar</button>
</form>

</body>
</html>