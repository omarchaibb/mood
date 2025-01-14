@extends('layouts.master')

@section('header')
    <h1>Edit Product</h1>
@stop

@section('contenu')
    <form action="{{ url('/edit/' . $produit->id) }}" method="POST">
        @csrf
        @method('PUT')
        
        <div class="mb-3">
            <label for="NomProduit" class="form-label">Product Name</label>
            <input type="text" class="form-control  bg-slate-800 rounded focus:outline-none focus:bg-slate-800 text-white" id="NomProduit" name="NomProduit" value="{{ $produit->NomProduit }}" required>
        </div>

        <div class="mb-3">
            <label for="Description" class="form-label">Description</label>
            <textarea class="form-control bg-slate-800 rounded focus:outline-none focus:bg-slate-800 text-white" id="Description" name="Description" required>{{ $produit->Description }}</textarea>
        </div>

        <div class="mb-3">
            <label for="Categorie_id" class="form-label bg-slate-800 rounded focus:outline-none focus:bg-slate-800 text-white">Category</label>
            <select class="form-control bg-slate-800 rounded focus:outline-none focus:bg-slate-800 text-white" id="Categorie_id" name="Categorie_id" required>
                <option value="">Select a category</option>
                @foreach ($categories as $categorie)
                    <option value="{{ $categorie->id }}" {{ $produit->Categorie_id == $categorie->id ? 'selected' : '' }}>
                        {{ $categorie->NomCategorie }}
                    </option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Update Product</button>
    </form>
@stop

@section('aside')
    <p>Edit the product details and update the category.</p>
@stop
