<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\artista;

class ArtistaController extends Controller
{
    public function index() { //GET api/artista
        return response()->json(artista::all(), 200);    
    }
    
    public function store(Request $request){ //POST api/artista + datos JSON
        try{
            $obj = artista::create($request->all());
            return response()->json(["id"=>$obj->id], 201);
        }catch(\Exception $e){
             return response()->json(["id"=>0], 200);
        }
    }

    public function show($id){ //GET api/artista/id
        $artista = artista::find($id);
        if($artista != null){
            $creaciones = $artista->creaciones;
        }
        return response()->json($artista, 200);
    }

    public function update(Request $request, $id){ //PUT api/artista/id
        try{
            $artista = artista::find($id);
            $resultado = $artista->update($request->all());
            return response()->json(["resultado"=>$resultado], 200);
        }catch(\Exception $e){
            return response()->json(["resultado"=>false], 200);
        }
    }

    public function destroy($id){ //DELETE api/artista/id
        try{
            $resultado = artista::destroy($id);
        }catch(\Exception $e){
            $resultado = -1;
        }
    }
}
