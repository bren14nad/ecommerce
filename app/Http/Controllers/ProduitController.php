<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProduitController extends Controller
{
    //
    public function detailProduit() {
        return view('welcome')->with('detailProd','detailProd');
    }
    public function panier() {
        return view('welcome')->with('panier','panier');
    }
}

