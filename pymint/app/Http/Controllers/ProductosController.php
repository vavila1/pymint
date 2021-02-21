<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proveedores;
use App\Models\Productos;

class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id_proveedor)
    {
        //
        $proveedor = Proveedores::datosProveedor($id_proveedor);
        $productos = Proveedores::productosProveedor($id_proveedor);
        return view('productos',[
            'productos'=>$productos,
            'proveedor'=>$proveedor
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id_proveedor)
    {
        //
        return view('form_producto',['id_proveedor'=>$id_proveedor]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($id_proveedor,Request $request)
    {
        //
        $response = Productos::registrarProductos($id_proveedor,$request);
       if($response=='true'){
        return redirect()->route('proveedores.productos.index',$id_proveedor)->with('mensaje','¡El producto ha sido registrado con éxito!');
       }else{
        dd("hay pedos");die();
       }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_producto,$id_proveedor)
    {
        $response = Productos::borrarProducto($id_proveedor,$id_producto);
        if($response=='true'){
            return redirect()->route('proveedores.productos.index',$id_proveedor)->with('mensaje','¡El registro ha sido eliminado correctamente!');
        }
    }
}
