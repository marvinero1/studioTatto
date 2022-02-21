<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artista extends Model
{
    protected $fillable=['nombre_artista',
                         'rol',
                         'facebook',
                         'instagram',
                         'twitter',
                         'whatsapp',
                         'telegram',
                         'imagen',
                        ];
}
