<?php

use App\Http\Controllers\ConnexionController;
use App\Http\Controllers\InscriptionController;
use App\Http\Controllers\ProduitController;
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
    return view('welcome');
});
Route::get('/admin', function () {
    return view('admin');
})->name('admin');
Route::get('/detailProd', [ProduitController::class, 'detailProduit'])->name('detailProd');
Route::get('/panier', [ProduitController::class, 'panier'])->name('panier');

Route::get('/connexion', [ConnexionController::class, 'connexion'])->name('connexion');
Route::get('/inscription', [InscriptionController::class, 'inscription'])->name('inscription');




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
