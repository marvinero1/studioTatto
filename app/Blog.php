<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable=['nombre_cliente',
                            'detalle',
                            'imagen',
                        ];
}
