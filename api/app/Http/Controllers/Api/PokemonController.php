<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Pokemones;
use Illuminate\Http\Request;


class PokemonController extends Controller
{
  
    public function index()
    {
        
        $pokemones = Pokemones::all();
        return $pokemones;
    }

   
    public function store(Request $request)
    {
        $pokemones = new pokemones ();
        $pokemones -> nombre = $request->nombre;
        $pokemones -> tipo = $request->tipo;

        $pokemones->save();        
    }
    public function show($id)
    {
        $pokemones = Pokemones::find($id);
        return $pokemones;
    }

    public function update(Request $request, $id)
    {
        $pokemones = Pokemones::findOrFail($request->id);
        $pokemones -> nombre = $request->nombre;
        $pokemones -> tipo = $request->tipo;

        $pokemones->save(); 
        return $pokemones;

    }

    public function destroy($id)
    {
        $pokemones = Pokemones :: destroy($id);
        return $pokemones;
    }
}
