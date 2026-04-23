<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Crear Tipo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">

<h2>Crear Tipo de Producto</h2>

<form action="{{ route('tipos.store') }}" method="POST">
    @csrf

    <div class="mb-3">
        <label>Nombre</label>
        <input type="text" name="nombre" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Descripción</label>
        <textarea name="descripcion" class="form-control"></textarea>
    </div>

    <button class="btn btn-success">Guardar</button>
</form>

</body>
</html>