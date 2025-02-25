<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    use HasFactory;
    protected $fillable = ['NomProduit','Description','Categorie_id',"image"];

    public function categorie()
    {
        return $this->belongsTo(Categorie::class, 'Categorie_id');
    }
}
