<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class figura extends Model
{
    use HasFactory;
    protected $table = 'figura';
    protected $fillable = ['idArtista','nombreFigura','materialFigura','precioFigura','imgFigura'];
    
    function artista(){
        
        return $this->belongsTo('App\Models\artista', 'idArtista');
        
    }
}
