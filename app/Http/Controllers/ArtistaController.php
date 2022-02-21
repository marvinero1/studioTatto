<?php

namespace App\Http\Controllers;

use App\Artista;
use Illuminate\Http\Request;
use File;
use Session;
use DB;
use Image;

class ArtistaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request){

        $nombre_artista = $request->get('buscarpor');

        $artista = Artista::where('nombre_artista','like',"%$nombre_artista%")
        ->latest()->paginate(10);

        return view('artista.index', compact('artista'));
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
            $extension = explode('images/artista', mime_content_type('images/artista'))[0];
            $image = Image::make($file);
            $fileName = rand(0,10)."-".date('his')."-".rand(0,10).".".$info;
            $path  = 'images/artista';
            if (!file_exists($path)) {
                mkdir($path, 0777, true);
            }
            $img = $path.'/'.$fileName;
            if($image->save($img)){
                $requestData['imagen'] = $img;
                $mensaje = "artista Registrado correctamente";
            }else{
                $mensaje = "Error al guardar la imagen";
            }
        }


        $artista = Artista::create($requestData);

        if($artista){
            DB::commit();
        }else{
            DB::rollback();
        }

        Session::flash('message',$mensaje);
        return redirect()->route('artistas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Artista  $artista
     * @return \Illuminate\Http\Response
     */
    public function show(Artista $artista)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Artista  $artista
     * @return \Illuminate\Http\Response
     */
    public function edit(Artista $artista)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Artista  $artista
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Artista $artista)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Artista  $artista
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        $artista =  Artista::find($id);
        $artista->delete();

        Session::flash('message','Artista eliminado exitosamente!');
        return redirect()->route('artistas.index');
    }
}
