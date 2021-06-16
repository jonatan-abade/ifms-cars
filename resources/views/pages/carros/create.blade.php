@extends('layouts.main')
@section('title', 'Home')
@section('principal')

    <div class="row">
        <form class="col s8 offset-s2 bg-white shadow rounded-lg p5" action="/carro" method="POST"
        enctype= multipart/form-data>
            @csrf
            <h1 class="py-3 m-0 text-4xl">Formulario de cadastrado</h1>
            <hr>
            <div class="mt-5 mb-3 row">
                <div class="input-field col s11">
                    <input placeholder="Digite o modelo do carro" id="nome" name="nome" type="text" class="validate" value="{{isset($carro->nome) ? $carro->nome : old('nome')}}">
                    <label for="nome">Modelo</label>
                    @error('nome')
                        <div class="bg-red-500 roudend text-white p-3">{{ $message }}</div>
                    @enderror
                </div>
            </div> 

            <div class="row">
                <div class="input-field col s11">
                    <textarea id="textarea1" class="materialize-textarea" name="descricao">{{isset($carro->descricao) ? $carro->descricao : old('descricao')}}</textarea>
                    <label for="textarea1">Descrição</label>
                    @error('descricao')
                        <div class="bg-red-500 roudend text-white p-3">{{ $message }}</div>
                     @enderror
                </div>
             </div>

             <div class="row">
                <div class="input-field col s5">
                    <input placeholder="Digite o valor do carro" id="preco" type="text" name="preco" class="validate" {{isset($carro->preco) ? $carro->preco :old('preco')}}>
                    <label for="preco">Preço</label>
                    @error('preco')
                        <div class="bg-red-500 roudend text-white p-3">{{ $message }}</div>
                    @enderror
                </div>

                <div class="input-field col s6">
                    <select name="categoria_id">
                        @foreach ($categorias as $categoria)
                            <option value="{{$categoria->id}}">{{$categoria->titulo}}</option>
                        @endforeach
                      </select>
                      <label>Categoria</label>
                </div>
            </div>

            <div class="file-field input-field">
                <div class="btn bg-blue-500">
                  <span>Selecione uma imagem</span>
                  <input type="file" name="imagens">
                </div>
                <div class="file-path-wrapper">
                  <input class="file-path validate" type="text">
                </div>
                @error('imagens')
                    <div class="bg-red-500 roudend text-white p-3">{{ $message }}</div>
                @enderror
            </div>

            <button class="btn bg-red-500 mb-3 end">Enviar</button>
        </form>
    </div>
    <script>
        $('.preco').mask('#.##0,00', {reverse: true});

    </script>
@endsection
