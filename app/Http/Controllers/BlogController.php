<?php

namespace App\Http\Controllers;

use App\Blog;
use File;
use Image;
use DB;
use Session;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request){

        $nombre_cliente = $request->get('buscarpor');

        $blog = Blog::where('nombre_cliente','like',"%$nombre_cliente%")
        ->latest()->paginate(10);

        return view('testimonial.index', compact('blog'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        return view('testimonial.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){

        $mensaje = "Blog Guardada Correctamente";
        $mensajeError = "Blog No Guardada Correctamente";

        DB::beginTransaction();
        $requestData = $request->all();
        // dd($requestData);

        if($request->imagen){

            $data = $request->imagen;

            $file = file_get_contents($request->imagen);
            $info = $data->getClientOriginalExtension();
            $extension = explode('images/testimonial', mime_content_type('images/testimonial'))[0];
            $image = Image::make($file);
            $fileName = rand(0,10)."-".date('his')."-".rand(0,10).".".$info;
            $path  = 'images/testimonial';
            if (!file_exists($path)) {
                mkdir($path, 0777, true);
            }
            $img = $path.'/'.$fileName;
            if($image->save($img)){
                $requestData['imagen'] = $img;
                $mensaje = "Blog Registrado correctamente";
            }else{
                $mensaje = "Error al guardar la imagen";
            }
        }


        $blog = Blog::create($requestData);

        if($blog){
            DB::commit();
        }else{
            DB::rollback();
        }

        Session::flash('message',$mensaje);
        return redirect()->route('blog.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        $mensajeEliminacion = "Blog Eliminado Correctamente";

        $blog = Blog::findOrFail($id);
        $blog->delete();

        Session::flash('message',$mensajeEliminacion);
        return redirect()->route('blog.index');
    }
}
