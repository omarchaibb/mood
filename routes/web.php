<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\CategorieController;



Route::get('/showprod',[ProduitController::class, 'index'])->name('afficher');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



    Route::get('/showprod', [ProduitController::class, 'index'])->name('afficher');
    Route::get('/nouveau', [ProduitController::class, 'Nouveau_produit']);
    Route::post('/creation', [ProduitController::class, 'Creation_produit'])->name('creationProd');
    Route::get('/edition/{id}', [ProduitController::class, 'Edition_produit']);
    Route::put('/edit/{id}', [ProduitController::class, 'Edit_produit']);
    Route::delete('/delete/{id}', [ProduitController::class, 'Delete_produit']);
    Route::get('/categorie/{id}', [CategorieController::class, 'ProduitsCategorie'])->name("categorie.show");
require __DIR__.'/auth.php';
