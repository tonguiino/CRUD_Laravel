<?php

namespace App\Http\Controllers;

use App\Models\Productos;
use Illuminate\Http\Request;

use function Pest\Laravel\delete;

class ProductosController extends Controller
{

    public function index()
    {
        //Pagina del inicio de nuestro CRUD
        $productos = Productos::all();
        return view('welcome', compact('productos'));
    }


    public function create()
    {
        //el formulario donde vamos a ingresar datos (NO GUARDAR DATOS EN DB)

        return view('layout.aggProducto');
    }

    public function store(Request $request)
    {
        //Sirve para guardar los datos en la BD
        $productos = new Productos();
        $productos->nombre = $request->post('nombre');
        $productos->descripcion = $request->post('descripcion');
        $productos->precio = $request->post('precio');
        $productos->save();

        return redirect()->route('productos.index')->with('success', 'Se agrego correctamente');
    }

    public function show($id)
    {
        //Servira para obtener un registro de la tabla
        $producto = Productos::find($id);

        return view('layout.eliminar', compact('producto'));
    }


    public function edit($id)
    {
        //Nos sirve para poder traer los datos que se van a editas y los coloca en un formulario 
        $producto = Productos::find($id);

        return view('layout.editar', compact('producto'));
    }


    public function update(Request $request, $id)
    {
        //Actualiza los datos en la BD
        $productos = Productos::find($id);
        $productos->nombre = $request->post('nombre');
        $productos->descripcion = $request->post('descripcion');
        $productos->precio = $request->post('precio');
        $productos->save();

        return redirect()->route('productos.index')->with('success', 'Se actualizo correctamente');
    }


    public function destroy($id)
    {
        //ELimina un registro
        $productos = Productos::find($id);
        $productos->delete();
        return redirect()->route('productos.index')->with('success', 'Se elimino correctamente');
    }
}
