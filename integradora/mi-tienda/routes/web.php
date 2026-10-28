
<?php

use Illuminate\Support\Facades\Route;
use App\Models\Torta;

Route::get('/', function () {
    return redirect('/inicio');
});

Route::get('/inicio', function () {
    return view('inicio');
});

Route::get('/contacto', function () {
    return view('contacto');
});

Route::get('/tortas', function () {
    $tortas = Torta::all();
    return view('tortas', compact('tortas'));
});

Route::get('/tortas/nuevo', function () {
    return view('tortas-nuevo');
});

Route::post('/tortas/nuevo', function () {
    request()->validate([
        'sabor' => 'required',
        'precio' => 'required|integer',
    ], [
        'sabor.required' => 'Indica el sabor de la torta.',
        'precio.required' => 'Indica el precio de la torta.',
        'precio.integer' => 'El precio va en digitos, sin centavos.',
    ]);

    Torta::create([
        'sabor' => request()->input('sabor'),
        'precio' => request()->input('precio'),
    ]);

    return redirect('/tortas');
});
