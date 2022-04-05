<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Carusel;
use App\Artista;
use App\Producto;
use App\Blog;
use App\Evento;

class IndexController extends Controller{

    public function getIndex(Request $request){
        $whatsapp=0;
        $whatsapp_url = "";
        $artistas = Artista::get();
        $producto = Producto::latest()->paginate();
        $blog = Blog::latest()->paginate();
        $evento = Evento::latest()->paginate();

        foreach($artistas as $artistass){
            if (!$artistass) {
                $whatsapp = $artistass->whatsapp;
                $whatsapp_url = "https://wa.me/".$whatsapp."?text=Hola%20Quisiera%20%20cotizar%20tus%20servicios%20y/o%20Productos";
            //  echo $whatsapp.",";
            } else {
                // code...
            }
        }
        
        return view('paginalayouts.indexpage', compact('artistas','whatsapp_url','producto','blog','evento'));
    }
}
