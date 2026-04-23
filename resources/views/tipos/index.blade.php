<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Tipos de Producto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">

<h2>Tipos de Producto</h2>

@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

<a href="{{ route('tipos.create') }}" class="btn btn-primary mb-3">Crear Tipo</a>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Descripción</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($tipos as $tipo)
        <tr>
            <td>{{ $tipo->tipoProductoID }}</td>
            <td>{{ $tipo->nombre }}</td>
            <td>{{ $tipo->descripcion }}</td>
            <td>
                <a href="{{ route('tipos.show', $tipo->tipoProductoID) }}" class="btn btn-info btn-sm">Ver</a>
                <a href="{{ route('tipos.edit', $tipo->tipoProductoID) }}" class="btn btn-warning btn-sm">Editar</a>

                <form action="{{ route('tipos.destroy', $tipo->tipoProductoID) }}" method="POST" style="display:inline;">
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