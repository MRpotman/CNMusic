<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Artista</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">

<h2>Editar Artista</h2>

<form action="{{ route('artistas.update', $artista->artistaID) }}" method="POST">
    @csrf
    @method('PUT')

    <input type="text" name="nombre" value="{{ $artista->nombre }}" class="form-control mb-2" required>

    <input type="text" name="nacionalidad" value="{{ $artista->nacionalidad }}" class="form-control mb-2" required>

    <select name="selloDiscograficoID" class="form-control mb-2" required>
        @foreach($sellos as $sello)
            <option value="{{ $sello->selloDiscograficoID }}"
                {{ $artista->selloDiscograficoID == $sello->selloDiscograficoID ? 'selected' : '' }}>
                {{ $sello->nombre }}
            </option>
        @endforeach
    </select>

    <button class="btn btn-primary">Actualizar</button>
    <a href="{{ route('artistas.index') }}" class="btn btn-secondary">Volver</a>
</form>

</body>
</html>