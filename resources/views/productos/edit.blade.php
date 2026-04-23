<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Producto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">

<h2>Editar Producto</h2>

<form action="{{ route('productos.update', $producto->productoID) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label>Nombre</label>
        <input type="text" name="nombre" value="{{ $producto->nombre }}" class="form-control">
    </div>

    <div class="mb-3">
        <label>Álbum</label>
        <input type="text" name="album" value="{{ $producto->album }}" class="form-control">
    </div>

    <div class="mb-3">
        <label>Precio</label>
        <input type="number" step="0.01" name="precio" value="{{ $producto->precio }}" class="form-control">
    </div>

    <div class="mb-3">
        <label>Stock</label>
        <input type="number" name="stock" value="{{ $producto->stock }}" class="form-control">
    </div>

    <div class="mb-3">
        <label>Artista</label>
        <select name="artistaID" class="form-control">
            @foreach($artistas as $a)
                <option value="{{ $a->artistaID }}" {{ $producto->artistaID == $a->artistaID ? 'selected' : '' }}>
                    {{ $a->nombre }}
                </option>
            @endforeach
        </select>
    </div>

    <div class="mb-3">
        <label>Género</label>
        <select name="generoID" class="form-control">
            @foreach($generos as $g)
                <option value="{{ $g->generoID }}" {{ $producto->generoID == $g->generoID ? 'selected' : '' }}>
                    {{ $g->nombre }}
                </option>
            @endforeach
        </select>
    </div>

    <div class="mb-3">
        <label>Tipo Producto</label>
        <select name="tipoProductoID" class="form-control">
            @foreach($tipos as $t)
                <option value="{{ $t->tipoProductoID }}" {{ $producto->tipoProductoID == $t->tipoProductoID ? 'selected' : '' }}>
                    {{ $t->nombre }}
                </option>
            @endforeach
        </select>
    </div>

    <button class="btn btn-primary">Actualizar</button>
</form>

</body>
</html>