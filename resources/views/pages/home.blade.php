@extends('layouts.main')
@section('title', 'Home')
@section('principal')

<div class="carousel carousel-slider center">
    @foreach ($carros as $carro)
    <a class="carousel-item red white-text" href="#one!" 
    style="background-image: url(imagens/{{$carro->imagens}});background-repeat: no-repeat;
    background-size: 100% ;">
      <h2>{{$carro->nome}}</h2>
      <p class="white-text"><b>Categoria: </b>{{$carro->categoria->titulo}}</p>
    </a>
    @endforeach
</div>

<div class="grid grid-cols-2 flex items-center container">
    <img src="src/carro.png" class="w-full">
    <div>
        <h1>Seja bem vindos a <b>IFMS cars</b></h1>
        <h2>Tudo que você precisa encontra aqui</h2>
        <p><a href="">Ver todos os modelo</a></p>
    </div>
</div>
@endsection
