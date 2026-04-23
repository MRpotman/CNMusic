<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Géneros</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">

<h2>Lista de Géneros</h2>

@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

<a href="{{ route('generos.create') }}" class="btn btn-primary mb-3">Crear Género</a>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($generos as $g)
        <tr>
            <td>{{ $g->generoID }}</td>
            <td>{{ $g->nombre }}</td>
            <td>
                <a href="{{ route('generos.show', $g->generoID) }}" class="btn btn-info btn-sm">Ver</a>
                <a href="{{ route('generos.edit', $g->generoID) }}" class="btn btn-warning btn-sm">Editar</a>

                <form action="{{ route('generos.destroy', $g->generoID) }}" method="POST" style="display:inline;">
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