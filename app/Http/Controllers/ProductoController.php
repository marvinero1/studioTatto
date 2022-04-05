<?php

namespace App\Http\Controllers;

use App\Producto;
use Illuminate\Http\Request;
use Session;
use DB;
use File;
use Image;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request){

        $nombre_producto = $request->get('buscarpor');

        $producto = Producto::where('nombre_producto','like',"%$nombre_producto%")->latest()->paginate(10);

        return view('producto.index', compact('producto'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('producto.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){

        $mensaje = "Producto Guardada Correctamente";
        $mensajeError = "Producto No Guardada Correctamente";

        DB::beginTransaction();
        $requestData = $request->all();
        // dd($requestData);

        if($request->imagen){

            $data = $request->imagen;

            $file = file_get_contents($request->imagen);
            $info = $data->getClientOriginalExtension();
            $extension = explode('images/productos', mime_content_type('images/productos'))[0];
            $image = Image::make($file);
            $fileName = rand(0,10)."-".date('his')."-".rand(0,10).".".$info;
            $path  = 'images/productos';
            if (!file_exists($path)) {
                mkdir($path, 0777, true);
            }
            $img = $path.'/'.$fileName;
            if($image->save($img)){
                $requestData['imagen'] = $img;
                $mensaje = "Producto Registrado correctamente";
            }else{
                $mensaje = "Error al guardar la imagen";
            }
        }


        $producto = Producto::create($requestData);

        if($producto){
            DB::commit();
        }else{
            DB::rollback();
        }

        Session::flash('message',$mensaje);
        return redirect()->route('productos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function show(Producto $producto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function edit(Producto $producto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Producto $producto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        $mensajeEliminacion = "Producto Eliminado Correctamente";

        $productos = Producto::findOrFail($id);

        $productos->delete();

        Session::flash('message',$mensajeEliminacion);
        return redirect()->route('productos.index');
    }
}
