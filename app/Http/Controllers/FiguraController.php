<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\figura;

class FiguraController extends Controller
{
     public function index() { //GET api/figura
        return response()->json(figura::all(), 200);    
    }
    
    public function store(Request $request){ //POST api/figura + datos JSON
        try{
            $obj = figura::create($request->all());
            return response()->json(["id"=>$obj->id], 201);
        }catch(\Exception $e){
             return response()->json(["id"=>0], 200);
        }
    }

    public function show($id){ //GET api/figura/id
        $figura = figura::find($id);
        if($figura != null){
            $artista = $figura->artista;
        }
        return response()->json($figura, 200);
    }

    public function update(Request $request, $id){ //PUT api/figura/id
        try{
            $figura = figura::find($id);
            $resultado = $figura->update($request->all());
            return response()->json(["resultado"=>$resultado], 200);
        }catch(\Exception $e){
            return response()->json(["resultado"=>false], 200);
        }
    }

    public function destroy($id){ //DELETE api/figura/id
        try{
            $resultado = figura::destroy($id);
        }catch(\Exception $e){
            $resultado = -1;
        }
    }
}
