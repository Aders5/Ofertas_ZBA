<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Ofertas</title>
</head>
<body>
    <h1>Lista de Ofertas</h1>
    <p>
        <a href ="{{ route('ofertas.create') }}">Añadir una nueva oferta </a>
    </p>
    <ul>
        @foreach ($ofertas as $oferta )
        <li>
            Titulo de la oferta: <a href="{{ route('ofertas.show', $oferta) }}">{{ $oferta->titulo }}</a> |Vigencia de la oferta: {{ $oferta->vigencia->format('d/m/Y') }} 
            |Tienda: {{ $oferta->tienda }} |Precio original: {{ $oferta->precio_original }} |Precio con descuento: {{ $oferta->precio_descuento }}
        </li>
        @endforeach
    </ul>
</body>
</html>