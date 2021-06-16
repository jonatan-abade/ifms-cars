@extends('layouts.main')
@section('title', 'Home')
@section('principal')

    <div class="flex justify-between items-center container">
        <h1 class="text-4xl">Carros</h1>
        @if (Auth::check())
            <a href="/carro/create" class="btn">Adicionar</a>
        @endif
    </div>
    
    <div class="grid grid-cols-4 container">
          @foreach ($carros as $carro)
          <div class="rounded bg-white shadow-lg p-5 mr-1">
          
          <a href="carro/show/{{$carro->id}}"><img src="imagens/{{$carro->imagens}}" alt="{{$carro->nome}}" class="h-52"></a>
        
          <h4 class="py-3">{{$carro->nome}}</h4>
          <div class="flex justify-between">
            <a class="btn bg-yellow-500 waves-effect waves-light mr-1" href="/carro/{{$carro->id}}">editar</a>
            <form action="/carro/{{$carro->id}}" method="post">
              @csrf
              @method('DELETE')
              <button class="btn bg-red-500">Deletar</button>
            </form>
          </div>
          
          </div>
      @endforeach
    </div>
@endsection
