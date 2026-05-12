<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactoController;

Route::get('/', function () {
    return view('principal');
});
Route::get('/comprar', function () {
    return view('comprar');
});
Route::get('/terminos-y-uso', function () {
    return view('terminos-y-uso');
});


Route::get('/quienes_somos', function () {
return view('quienes_somos');
});

Route::get('/contactanos',function (){
    return view('contactanos');
});

Route::get('principal',function (){
    return view('principal');
});



Route::get('/exito', function () {
    return view('exito');
});


Route::post('/contacto', [ContactoController::class, 'procesar']);
?>

