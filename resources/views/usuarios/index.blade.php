<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Usuarios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">

<h2>Lista de Usuarios</h2>

@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

<a href="{{ route('usuarios.create') }}" class="btn btn-primary mb-3">Crear Usuario</a>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Email</th>
            <th>Teléfono</th>
            <th>Dirección</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($usuarios as $usuario)
        <tr>
            <td>{{ $usuario->usuarioID }}</td>
            <td>{{ $usuario->nombre }}</td>
            <td>{{ $usuario->email }}</td>
            <td>{{ $usuario->telefono }}</td>
            <td>{{ $usuario->direccion }}</td>
            <td>
                <a href="{{ route('usuarios.show', $usuario->usuarioID) }}" class="btn btn-info btn-sm">Ver</a>
                <a href="{{ route('usuarios.edit', $usuario->usuarioID) }}" class="btn btn-warning btn-sm">Editar</a>

                <form action="{{ route('usuarios.destroy', $usuario->usuarioID) }}" method="POST" style="display:inline;">
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