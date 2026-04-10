<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactoController;

Route::get('/', function () {
    return view('principal');
});
Route::get('/compra', function () {
    return view('compra');
});
Route::get('/terminos-y-uso', function () {
    return view('terminos-y-uso');
});


Route::get('/quienes_somos', function () {
return view('quienes_somos');
});

Route::get('/contacto',function (){
    return view('contacto');
});

Route::get('principal',function (){
    return view('principal');
});



Route::get('/exito', function () {
    return view('exito');
});


Route::post('/contacto', [ContactoController::class, 'procesar']);
?>

