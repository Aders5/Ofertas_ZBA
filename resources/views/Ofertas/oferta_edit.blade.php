<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oferta</title>
</head>
<body>
    <h1>Formulario de Contacto(EDIT)</h1>
    <p>
        <a href ="{{ route('ofertas.index') }}">Volver a index</a>
    </p>

    @if (session('info'))
    <div style="background-color: #4caf50; color: white; padding: 10px; border-radius: 5px; margin-bottom: 20px; font-family: sans-serif;">
        {{ session('info') }}
    </div>
    @endif


   <form action="{{ route('ofertas.update', $oferta) }}" method="POST">
        @csrf
        @method('PATCH')
        <label for="titulo">Titulo de la Oferta:</label>
        <input type="text" id="titulo" name="titulo" class="form-control @error('titulo') is-invalid @enderror" value="{{ old('titulo') ?? $oferta->titulo}}">
        @error('titulo')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
        <br><br>

        <label for="vigencia">Vigencia de la oferta:</label>
        <input type="date" id="vigencia" name="vigencia" class="form-control @error('vigencia') is-invalid @enderror" value="{{ old('vigencia') ?? $oferta->vigencia}}">
        @error('vigencia')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
        <br><br>

        <label for="tienda">Tienda:</label>
        <input type="text" id="tienda" name="tienda" class="form-control @error('tienda') is-invalid @enderror" value="{{ old('tienda') ?? $oferta->tienda}}">
        @error('tienda')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
        <br><br>

        <label for="precio_original">Precio original:</label>
        <input type="decimal" id="precio_original" name="precio_original" class="form-control @error('precio_original') is-invalid @enderror" value="{{ old('precio_original') ?? $oferta->precio_original}}">
        @error('precio_original')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
        <br><br>

        <label for="precio_descuento">Precio con descuento:</label>
        <input type="decimal" id="precio_descuento" name="precio_descuento" class="form-control @error('precio_descuento') is-invalid @enderror" value="{{ old('precio_descuento') ?? $oferta->precio_descuento}}">
        @error('precio_descuento')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
        <br><br>

        <input type="submit" value="Guardar oferta">
</form>
      
</body>
</html>