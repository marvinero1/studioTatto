<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model{

    protected $fillable=['nombre_producto',
                         'marca',
                         'imagen',
                         'precio',
                         'descripcion',
                        ];
}
