<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/forms.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>Agregar producto</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <div class="card">
                    <div class="card-header">
                        <h2>Registra un nuevo producto</h2>
                    </div>
                    <div class="card-body">
                        <p class="card-text">
                        <form action="{{route('productos.store')}}" method="POST" class="form">
                            @csrf
                            <label for="">Producto</label>
                            <input type="text" name="nombre" placeholder="ingresa nombre del producto">
                            <label for="">Descripcion</label>
                            <input type="text" name="descripcion" placeholder="ingresa una breve descripcion">
                            <label for="">Precio</label>
                            <input type="text" name="precio" placeholder="ingresa su valor">
                            <div class="button">
                                <a href="{{Route('productos.index')}}" class="btn btn-danger">Regresar</a>
                                <button class="btn btn-primary">Agregar</button>
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