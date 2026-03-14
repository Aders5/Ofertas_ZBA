<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Oferta Encontrada</title>
</head>
<body>
    <h1>Oferta Encontrada</h1>
    <ul>
        <li>
            <strong>Titulo de la oferta:</strong> {{ $oferta->titulo }} | 
            <strong>Vigencia de la oferta:</strong> {{ $oferta->vigencia->format('d/m/Y') }} | 
            <strong>Tienda:</strong> {{ $oferta->tienda}}
            <strong>Precio original:</strong> {{ $oferta->precio_original }}
            <strong>Precio con descuento:</strong> {{ $oferta->precio_descuento }}
        </li>
    </ul>
    <p>
        <a href="{{ route('ofertas.edit', $oferta) }}">Editar</a>
        <form action="{{ route('ofertas.destroy', $oferta) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Eliminar</button>
        </form>
    </p>
</body>
</html>