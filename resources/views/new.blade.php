@extends('layouts.master')

@section('header')
    <h1 class="text-3xl font-bold text-gray-100 mb-6">Create New Product</h1>
@stop

@section('contenu')
    <form action="{{ route('creationProd') }}" method="POST" class="bg-gray-800 p-6 rounded-lg shadow-lg">
        @csrf
        <div class="mb-6">
            <label for="NomProduit" class="block text-sm font-medium text-gray-300 mb-2">Product Name</label>
            <input type="text" class="w-full px-4 py-2 bg-gray-700 border border-gray-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 text-gray-100 transition duration-300" id="NomProduit" name="NomProduit" required>
        </div>

        <div class="mb-6">
            <label for="Description" class="block text-sm font-medium text-gray-300 mb-2">Description</label>
            <textarea class="w-full px-4 py-2 bg-gray-700 border border-gray-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 text-gray-100 transition duration-300" id="Description" name="Description" rows="4" required></textarea>
        </div>

        <div class="mb-6">
            <label for="Categorie_id" class="block text-sm font-medium text-gray-300 mb-2">Category</label>
            <select class="w-full px-4 py-2 bg-gray-700 border border-gray-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 text-gray-100 transition duration-300" id="Categorie_id" name="Categorie_id" required>
                <option value="">Select a category</option>
                @foreach ($categories as $categorie)
                    <option value="{{ $categorie->id }}">{{ $categorie->NomCategorie }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="px-6 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition duration-300">Create Product</button>
    </form>
@stop

@section('aside')
    <div class="bg-gray-800 p-6 rounded-lg shadow-lg">
        <p class="text-gray-300">Choose a category for the new product from the list.</p>
    </div>
@stop