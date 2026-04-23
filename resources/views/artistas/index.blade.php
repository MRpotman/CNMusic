<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Artistas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">

<h2>Lista de Artistas</h2>

@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

<a href="{{ route('artistas.create') }}" class="btn btn-primary mb-3">Crear Artista</a>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Nacionalidad</th>
            <th>Sello Discográfico</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($artistas as $artista)
        <tr>
            <td>{{ $artista->artistaID }}</td>
            <td>{{ $artista->nombre }}</td>
            <td>{{ $artista->nacionalidad }}</td>
            <td>{{ $artista->selloDiscografico->nombre ?? 'Sin sello' }}</td>
            <td>
                <a href="{{ route('artistas.show', $artista->artistaID) }}" class="btn btn-info btn-sm">Ver</a>
                <a href="{{ route('artistas.edit', $artista->artistaID) }}" class="btn btn-warning btn-sm">Editar</a>

                <form action="{{ route('artistas.destroy', $artista->artistaID) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm">Eliminar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

</body>
</html>