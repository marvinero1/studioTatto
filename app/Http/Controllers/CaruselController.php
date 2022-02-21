<?php

namespace App\Http\Controllers;

use App\Carusel;
use Illuminate\Http\Request;
use File;
use Session;
use DB;
use Image;

class CaruselController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request){

        $nombre = $request->get('buscarpor');

        $carusel = Carusel::where('nombre','like',"%$nombre%")
        ->latest()->paginate(10);

        return view('carusel.index', compact('carusel'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){

        $mensaje = "Imagen Guardada Correctamente";
        $mensajeError = "Imagen No Guardada Correctamente";

        DB::beginTransaction();
        $requestData = $request->all();
        // dd($requestData);

        if($request->imagen){

            $data = $request->imagen;

            $file = file_get_contents($request->imagen);
            $info = $data->getClientOriginalExtension();
            $extension = explode('images/carusel', mime_content_type('images/carusel'))[0];
            $image = Image::make($file);
            $fileName = rand(0,10)."-".date('his')."-".rand(0,10).".".$info;
            $path  = 'images/carusel';
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


        $carusel = Carusel::create($requestData);

        if($carusel){
            DB::commit();
        }else{
            DB::rollback();
        }

        Session::flash('message',$mensaje);
        return redirect()->route('carusel.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Carusel  $carusel
     * @return \Illuminate\Http\Response
     */
    public function show(Carusel $carusel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Carusel  $carusel
     * @return \Illuminate\Http\Response
     */
    public function edit(Carusel $carusel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Carusel  $carusel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Carusel $carusel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Carusel  $carusel
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        $carusel = Carusel::find($id);
        $carusel->delete();
        Session::flash('message','Carusel eliminado exitosamente!');
        return redirect()->route('carusel.index'); 
    }
}
