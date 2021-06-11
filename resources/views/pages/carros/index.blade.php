@extends('layouts.main')
@section('title', 'Home')
@section('principal')

    <div class="flex justify-between container">
        <h1 class="">Carros</h1>
        @if (Auth::check())
            <a href="carro/create" class="btn">Adicionar</a>
        @endif
    </div>


@endsection
