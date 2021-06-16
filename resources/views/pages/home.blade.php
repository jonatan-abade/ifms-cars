@extends('layouts.main')
@section('title', 'Home')
@section('principal')

    <div class="grid grid-cols-2 flex items-center container bg-white shadow-lg rounded">
        <img src="src/carro.jpg" class="w-full h-full">
        <div class="flex flex-col justify-around items-end h-3/6 mr-10">
            <h1 class="text-5xl">Seja bem-vindo a <b>IFMS auto</b></h1>
            <h2 class="text-4xl">Tudo que você precisa encontra aqui</h2>
            <p><a class="text-3xl text-red-500 hover:underline" href="">Ver todos os modelo</a></p>
        </div>
    </div>


    <div class="container flex justify-center">
        <h1 class="text-3xl mt-5 mb-2 border-b-2 border-red-500 text-center w-1/2">
            <i class="fas fa-rocket text-red-500 "></i>
            Últimos lançamentos
        </h1>
    </div>
    <div class="grid grid-cols-2">
        <div class="carousel carousel-slider center">
            @foreach ($carros as $carro)
                <a class="carousel-item bg-white" href="carro/show/{{ $carro->id }}"
                    style="background-image: url(imagens/{{ $carro->imagens }});">
                    <h2 class="text-white bg-gray-500">{{ $carro->nome }}</h2>
                    <p class="text-white bg-gray-500"><b>Categoria: </b>{{ $carro->categoria->titulo }}</p>
                </a>
            @endforeach
        </div>
        <div class="carousel carousel-slider center">
            @foreach ($motos as $moto)
                <a class="carousel-item bg-white" href="moto/show/{{ $moto->id }}"
                    style="background-image: url(imagens/{{ $moto->imagens }});">
                    <h2 class="text-white bg-gray-500">{{ $moto->nome }}</h2>
                    <p class="text-white bg-gray-500"><b>Categoria: </b>{{ $moto->categoria->titulo }}</p>
                </a>
            @endforeach
        </div>
    </div>


@endsection
