@extends('layouts.main')
@section('title', 'Home')
@section('principal')
    <div class="row">
        <form class="col s8 offset-s2 bg-white shadow rounded-lg p5" method="POST" action="/categoria">
            @csrf
            @if (isset($categoria->id))
                @method('PUT')
            @else
                @method('POST')
            @endif
            <h1 class="py-3 m-0 text-4xl">Formulario de cadastrado</h1>
            <hr>
            <div class="mt-5 mb-3 row">
                <div class="input-field col s12">
                    <input type="hidden" name="id" value="{{isset($categoria->id) ? $categoria->id : null }}">
                    <input placeholder="Digite o nome da categoria" id="titulo" type="text" name="titulo" class="validate" 
                    value="{{isset($categoria->titulo) ? $categoria->titulo : old('titulo')}}">
                    <label for="titulo">Título</label>
                    @error('titulo')
                        <div class="bg-red-500 roudend text-white p-3">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <input class="btn bg-red-500 mb-3" type="submit"> 
        </form>
    </div>

@endsection
