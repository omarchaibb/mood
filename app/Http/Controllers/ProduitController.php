<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use App\Models\Categorie;
use Illuminate\Http\Request;

class ProduitController extends Controller
{
    
    public function index()
    {
        $produits = Produit::all();
        return view('showprod', compact('produits'));  
    }

    
    public function Nouveau_produit()
    {
        $categories = Categorie::all();  
        return view('new', compact('categories')); 
    }

    
    public function Creation_produit(Request $request)
{
    $request->validate([
        'NomProduit' => 'required|string|max:255',
        'Description' => 'required|string',
        'Categorie_id' => 'required|exists:categories,id',
    ]);

    Produit::create($request->all());
    return redirect('/showprod')->with('success', 'Produit ajouté avec succès');
}

    public function Edition_produit($id)
    {
        $produit = Produit::findOrFail($id);  
        $categories = Categorie::all();  
        return view('edit', compact('produit', 'categories'));
    }

   
    public function Edit_produit(Request $request, $id)
    {
        $request->validate([
            'NomProduit' => 'required|string|max:255',
            'Description' => 'required|string',
            'Categorie_id' => 'required|exists:categories,id',
        ]);
    
        $produit = Produit::findOrFail($id);
        $produit->update($request->all());
    
        return redirect('/showprod')->with('success', 'Produit mis à jour avec succès');
    }

    
    public function Delete_produit($id)
    {
        
        Produit::destroy($id);

       
        return redirect()->route('afficher')->with('success', 'Product deleted successfully!');
    }
}
