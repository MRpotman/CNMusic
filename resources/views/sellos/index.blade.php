<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Sellos Discográficos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">

<h2>Lista de Sellos Discográficos</h2>

@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

<a href="{{ route('sellos.create') }}" class="btn btn-primary mb-3">Crear Sello</a>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($sellos as $s)
        <tr>
            <td>{{ $s->selloDiscograficoID }}</td>
            <td>{{ $s->nombre }}</td>
            <td>
                <a href="{{ route('sellos.show', $s->selloDiscograficoID) }}" class="btn btn-info btn-sm">Ver</a>
                <a href="{{ route('sellos.edit', $s->selloDiscograficoID) }}" class="btn btn-warning btn-sm">Editar</a>

                <form action="{{ route('sellos.destroy', $s->selloDiscograficoID) }}" method="POST" style="display:inline;">
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