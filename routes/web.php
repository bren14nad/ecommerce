<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('nad');
});
// Route::get('/products/{id}', function ($id) {
//     // Obtiens les informations du produit à partir d'une source statique
//     $product = [
//         'id' => $id,
//         'name' => 'Nom du produit',
//         'description' => 'Description du produit',
//         'price' => 99.99,
//         // Ajoute d'autres informations du produit si nécessaire
//     ];

//     return view('products.show', compact('product'));
// })->name('products.show');
