<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Detalle Lista</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">

<h2>Detalle de Lista de Deseos</h2>

<p><strong>ID:</strong> {{ $lista->listaDeseosID }}</p>
<p><strong>Usuario:</strong> {{ $lista->usuario->nombre }}</p>
<p><strong>Fecha:</strong> {{ $lista->fechaCreacion }}</p>

<hr>

<h4>Productos en la lista</h4>

@if($lista->items->count() > 0)
    <ul>
        @foreach($lista->items as $item)
            <li>
                {{ $item->producto->nombre }} - ₡{{ $item->producto->precio }}
            </li>
        @endforeach
    </ul>
@else
    <p>No hay productos en esta lista.</p>
@endif

<a href="{{ route('lista-deseos.index') }}" class="btn btn-secondary">Volver</a>

</body>
</html>