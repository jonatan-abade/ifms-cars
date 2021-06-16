@extends('layouts.main')
@section('title', 'Home')
@section('principal')
    
    <div class="container bg-white rounded shadow-lg">
        <div class="grid grid-cols-2">
            <img src="/imagens/{{$moto->imagens}}" alt="{{$moto->nome}}" class="w-full">
            <div class="flex flex-col p-5 h-full">
                <h1 class="text-4xl">{{$moto->nome}}</h1>
                <p class="pt-5"><b>Categoria:</b> {{$moto->categoria->titulo}}</p>
                <p class="row-span-2 py-3"> {{$moto->descricao}}</p>
                <h4><b>Preço:</b> {{$moto->preco}} R$</h4>
            </div>
        </div>
    </div>
@endsection
