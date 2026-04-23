<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Sello</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">

<h2>Editar Sello Discográfico</h2>

<form action="{{ route('sellos.update', $sello->selloDiscograficoID) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label class="form-label">Nombre</label>
        <input type="text" name="nombre" class="form-control" value="{{ $sello->nombre }}">
        @error('nombre')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <button class="btn btn-warning">Actualizar</button>
    <a href="{{ route('sellos.index') }}" class="btn btn-secondary">Cancelar</a>
</form>

</body>
</html>