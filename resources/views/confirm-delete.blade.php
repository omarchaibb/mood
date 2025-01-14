@extends('layouts.master')

@section('header')
    <h1>Confirm Deletion</h1>
@stop

@section('contenu')
    <p>Are you sure you want to delete the product "<strong>{{ $produit->NomProduit }}</strong>"?</p>

    <form action="{{ url('/delete/' . $produit->id) }}" method="POST">
        @csrf
        @method('DELETE')
        
        <button type="submit" class="btn btn-danger">Yes, delete</button>
        <a href="{{ url('/showProd') }}" class="btn btn-secondary">No, cancel</a>
    </form>
@stop

@section('aside')
    <p>This action cannot be undone. Please confirm that you want to delete this product.</p>
@stop
