@extends('layouts.main')
@section('title', 'Home')
@section('principal')

    <div class="flex justify-between items-center container">
        <h1 class="text-4xl">Motos</h1>
        @if (Auth::check())
            <a href="/moto/create" class="btn">Adicionar</a>
        @endif
    </div>

    <div class="grid grid-cols-3 container mt-5">
        @foreach ($motos as $moto)
            <div class="rounded bg-white shadow-lg p-5 mr-1 mb-3">

                <a href="moto/show/{{ $moto->id }}"><img src="imagens/{{ $moto->imagens }}"
                        alt="{{ $moto->nome }}"></a>

                <h4 class="py-3">{{ $moto->nome }}</h4>
                @if (Auth::check())
                    <div class="flex justify-between">
                        <a class="btn bg-yellow-500 waves-effect waves-light mr-1"
                            href="/moto/{{ $moto->id }}">editar</a>
                        <form action="/moto/{{ $moto->id }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn bg-red-500">Deletar</button>
                        </form>
                    </div>
                @endif

            </div>
        @endforeach
    </div>
@endsection
