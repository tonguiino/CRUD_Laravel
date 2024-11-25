<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/forms.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>Editar producto</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <div class="card">
                    <div class="card-header">
                        <h2>Editar un producto</h2>
                    </div>
                    <div class="card-body">
                        <p class="card-text">
                        <form action="{{route('productos.update', $producto->id)}}" method="POST" class="form">
                            @csrf
                            @method('PUT')
                            <label for="">Producto</label>
                            <input type="text" name="nombre" placeholder="ingresa nombre del producto" require value="{{$producto->Nombre}}">
                            <label for="">Descripcion</label>
                            <input type="text" name="descripcion" placeholder="ingresa una breve descripcion" require value="{{$producto->Descripcion}}">
                            <label for="">Precio</label>
                            <input type="text" name="precio" placeholder="ingresa su valor" require value="{{$producto->Precio}}">
                            <div class="button">
                                <a href="{{Route('productos.index')}}" class="btn btn-danger">Regresar</a>
                                <button class="btn btn-warning">Actualizar</button>
                            </div>
                        </form>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>