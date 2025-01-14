@extends('layouts.master')

@section('header')
<div class="bg-gradient-to-r from-purple-800 to-indigo-800 text-white p-6 rounded-lg shadow-md mb-6">
    <div class="flex justify-between items-center w-full">
        <h2 class="text-2xl font-bold">Dashboard</h2>
        @if (Route::has('login'))
            <div class="flex items-center space-x-4">
                @auth
                    <a href="{{ url('/dashboard') }}" class="text-sm text-blue-300 hover:text-blue-100 transition duration-300">Dashboard</a>
                    <form method="POST" action="{{ route('logout') }}" class="flex">
                        @csrf
                        <a href="{{ route('logout') }}" class="text-sm text-blue-300 hover:text-blue-100 transition duration-300"
                           onclick="event.preventDefault(); this.closest('form').submit();">
                            Log Out
                        </a>
                    </form>
                @else
                    <a href="{{ route('login') }}" class="text-sm text-blue-300 hover:text-blue-100 transition duration-300">Log in</a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="text-sm text-blue-300 hover:text-blue-100 transition duration-300">Register</a>
                    @endif
                @endauth
            </div>
        @endif
    </div>
</div>
@stop

@section('contenu')
<div class="bg-gray-800 p-6 rounded-lg shadow-lg">
    <ul class="space-y-4">
        @foreach ($produits as $produit)
            <li class="p-4 border-b border-gray-700 hover:bg-gray-700 transition duration-300">
                <h4 class="text-xl font-semibold text-gray-100">
                    <a href="#" class="text-indigo-400 hover:text-indigo-300 transition duration-300">{{ $produit->NomProduit }}</a>
                </h4>
                <p class="text-gray-300 mt-2">{{ $produit->Description }}</p>
                @auth 
                    <div class="mt-4 flex space-x-4">
                        <a href="{{ url('/nouveau') }}" class="px-4 py-2 bg-green-600 text-white rounded-lg hover:bg-green-500 transition duration-300">Ajouter</a>
                        <a href="{{ url('/edition/' . $produit->id) }}" class="px-4 py-2 bg-yellow-600 text-white rounded-lg hover:bg-yellow-500 transition duration-300">Editer</a>
                        <form action="{{ url('/delete/' . $produit->id) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="px-4 py-2 bg-red-600 text-white rounded-lg hover:bg-red-500 transition duration-300">Supprimer</button>
                        </form>
                    </div>
                @endauth
            </li>
        @endforeach
    </ul>
</div>
@stop

@section('aside')
<div class="bg-gray-800 p-6 rounded-lg shadow-lg mt-6">
    <h4 class="text-xl font-semibold text-gray-100 mb-4">Catégories:</h4>
    <ul class="space-y-2">
        <li class="hover:text-indigo-400 transition duration-300">
            <a href="{{route('categorie.show',["id"=>1])}}" class="text-gray-300 hover:text-indigo-400">Electronics</a>
        </li>
        <li class="hover:text-indigo-400 transition duration-300">
            <a href="{{route('categorie.show',["id"=>2])}}" class="text-gray-300 hover:text-indigo-400">Men</a>
        </li>
        <li class="hover:text-indigo-400 transition duration-300">
            <a href="{{route('categorie.show',["id"=>3])}}" class="text-gray-300 hover:text-indigo-400">Sport</a>
        </li>
        <li class="hover:text-indigo-400 transition duration-300">
            <a href="{{route('categorie.show',["id"=>4])}}" class="text-gray-300 hover:text-indigo-400">Women</a>
        </li>
    </ul>
</div>
@stop