<?php

namespace App\Http\Controllers;

abstract class Controller
{
    $validated = $request->validate([
    'nombre' => 'required|string|max:255',
    'stock' => 'required|integer|min:0',
], [
    'stock.required' => 'El campo stock es obligatorio.',
    'stock.integer' => 'El stock debe ser un número entero.',
    'stock.min' => 'El stock no puede ser menor a 0.',
]);
}
