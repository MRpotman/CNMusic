<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Productos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">

<h2>Productos</h2>

@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

<a href="{{ route('productos.create') }}" class="btn btn-primary mb-3">Crear Producto</a>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Álbum</th>
            <th>Precio</th>
            <th>Stock</th>
            <th>Artista</th>
            <th>Género</th>
            <th>Tipo</th>
            <th>Acciones</th>
        </tr>
    </thead>

    <tbody>
        @foreach($productos as $p)
        <tr>
            <td>{{ $p->productoID }}</td>
            <td>{{ $p->nombre }}</td>
            <td>{{ $p->album }}</td>
            <td>{{ $p->precio }}</td>
            <td>{{ $p->stock }}</td>
            <td>{{ $p->artista->nombre ?? 'N/A' }}</td>
            <td>{{ $p->genero->nombre ?? 'N/A' }}</td>
            <td>{{ $p->tipoProducto->nombre ?? 'N/A' }}</td>
            <td>
                <a href="{{ route('productos.show', $p->productoID) }}" class="btn btn-info btn-sm">Ver</a>
                <a href="{{ route('productos.edit', $p->productoID) }}" class="btn btn-warning btn-sm">Editar</a>

                <form action="{{ route('productos.destroy', $p->productoID) }}" method="POST" style="display:inline;">
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