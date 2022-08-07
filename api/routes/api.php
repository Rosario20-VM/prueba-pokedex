<?php

use App\Http\Controllers\Api\PokemonController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::controller(PokemonController::class)->group(function(){
    Route::get('/pokemones','index');
    Route::post('/pokemon','store');
    Route::get('/pokemon/{id}','show');
    Route::put('/pokemon/{id}','update');
    Route::delete('/pokemon/{id}','destroy');
});
