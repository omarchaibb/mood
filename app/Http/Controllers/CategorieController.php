<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Categorie;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    public function ProduitsCategorie($id)
{
    $categorie = Categorie::with('produits')->findOrFail($id);
    return view('categprod', compact('categorie'));
}


public function getproductsincategory(){
    
}

}
