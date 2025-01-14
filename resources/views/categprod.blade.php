@extends('layouts.master')

@section('header')
<h1 class="text-[3rem]"> the Category is : {{ $categorie->NomCategorie }}</h1>
<ul class="col-span-2 bg-gray-800 p-6 rounded-lg shadow-lg mt-4">
    @foreach ($categorie->produits as $produit)
        <li class="text-[1.3rem]">
            . {{ $produit->NomProduit }} - {{ $produit->Description }}
        </li>
    @endforeach
</ul>
@stop



