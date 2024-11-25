@extends('layout.plantilla')

@section('tituloPagina','Eliminar producto')

@section('contenido')
<div class="card">
    <div class="card-header">
        <h2>Registra un nuevo producto</h2>
    </div>
    <div class="card-body">
        <p class="card-text">
        <div class="alert alert-danger" role="alert">
            Estas seguro que deseas eliminar este producto?
            <table class="table table-sm table-hover">
                <thead>
                    <th>Producto</th>
                    <th>Descripcion</th>
                    <th>Precio</th>
                </thead>
                <tbody>
                    <tr>
                        <td>{{$producto->Nombre}}</td>
                        <td>{{$producto->Descripcion}}</td>
                        <td>{{$producto->Precio}}</td>
            </table>
            <hr>
            <form action="{{route('productos.destroy', $producto->id)}}" method="POST">
                @csrf
                @method("DELETE")
                <a href="{{Route('productos.index')}}" class="btn btn-warning">Regresar</a>
                <button class="btn btn-danger">Eliminar</button>
            </form>
        </div>
        </p>
    </div>
</div>

@endsection