<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Crear Artista</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">

<h2>Crear Artista</h2>

<form action="{{ route('artistas.store') }}" method="POST">
    @csrf

    <input type="text" name="nombre" class="form-control mb-2" placeholder="Nombre" required>

    <input type="text" name="nacionalidad" class="form-control mb-2" placeholder="Nacionalidad" required>

    <select name="selloDiscograficoID" class="form-control mb-2" required>
        <option value="">Seleccione un sello</option>
        @foreach($sellos as $sello)
            <option value="{{ $sello->selloDiscograficoID }}">
                {{ $sello->nombre }}
            </option>
        @endforeach
    </select>

    <button class="btn btn-success">Guardar</button>
    <a href="{{ route('artistas.index') }}" class="btn btn-secondary">Volver</a>
</form>

</body>
</html>