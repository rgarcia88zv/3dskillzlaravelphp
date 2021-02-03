<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class artista extends Model
{
    use HasFactory;
    protected $table = 'artista';
     public $timestamps = false;
     protected $fillable = ['nombreArtista','apellidoArtista','telfArtista','estiloArtista','imgArtista'];
     
     function creaciones(){
           return $this->hasMany('App\Models\figura', 'idArtista');
     }
}
