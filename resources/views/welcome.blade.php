@extends('layout/plantilla')

@section('tituloPagina','Hola mundo')
@section('contenido')
<div class="row">
    <h1>Bienvenidos a este maravilloso CRUD o</h1>
    <div class="card">
        <div class="card-header">
            CRUD laravel
        </div>
        <div class="card-body">
            <h5 class="card-title">Listado de productos en el sistema</h5>
            <p class="card-text">
            <div class="table table-responsive">
                <table class="table table-sm table-bordered">
                    <thead>
                        <th>Nombre</th>
                        <th>Producto</th>
                        <th>Precio</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </thead>
                    <tbody>
                        @foreach ($productos as $producto)
                        <tr>
                            <td>{{$producto->Nombre}}</td>
                            <td>{{$producto->Descripcion}}</td>
                            <td>{{$producto->Precio}}</td>
                            <td>
                                <form action="{{route('productos.edit', $producto->id)}}" method="GET">
                                    <button class="btn btn-warning">Actualizar</button>
                                </form>
                            </td>
                            <td>
                                <form action="{{route('productos.show', $producto->id)}}" method="GET">

                                    <button class="btn btn-danger">
                                        <span class="material-symbols-outlined">
                                            delete
                                        </span>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            </p>
            <p>
                <a href="{{Route('productos.create')}}" class="btn btn-primary">Agregar producto</a>
            </p>

        </div>
    </div>
</div>
@endsection