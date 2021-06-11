@extends('layouts.main')
@section('title', 'Home')
@section('principal')

    <div class="flex justify-between items-center container">
        <h1 class="text-4xl">Categorias</h1>
        @if (Auth::check())
            <a href="/categoria/create" class="btn">Adicionar</a>
        @endif
    </div>

    <table class="container bg-white shadow-lg p-5 rounded mt-3">
        <thead>
          <tr>
              <th>ID</th>
              <th>Titulo</th>
              <th>#</th>
          </tr>
        </thead>

        <tbody>
          @foreach ($categorias as $categoria)
          <tr>
            <td>{{ $loop->index + 1}}</td>
            <td>{{$categoria->titulo}}</td>
            <td class="flex">
              <a class="btn bg-yellow-500 waves-effect waves-light mr-1" href="/categoria/{{$categoria->id}}">editar</a>
             <form action="/categoria/{{$categoria->id}}" method="post">
                @csrf
                @method('DELETE')
                <button class="btn bg-red-500">Deletar</button>
              </form>
            </td>
            </div>
          </tr>
          @endforeach
        </tbody>
      </table>
@endsection
