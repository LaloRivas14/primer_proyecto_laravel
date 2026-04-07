<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactoController;

Route::get('/', function () {
    return view('principal');
});
Route::get('/sobre-mi', function () {
return view('sobre-mi');
});

Route::get('/contacto',function (){
    return view('contacto');
});

Route::get('principal',function (){
    return view('principal');
});

Route::post('/contacto', [ContactoController::class, 'procesar']);

Route::get('/exito', function () {
    return view('exito');
});
