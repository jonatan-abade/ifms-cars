<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoriaRequest;
use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function index()
    {
        $categorias = Categoria::orderBy('titulo')->get();

        return view('pages.categorias.index', ['categorias' => $categorias]);
    }

    public function create()
    {
        return view('pages.categorias.create');
    }

    public function store(CategoriaRequest $request)
    {
        Categoria::create($request->except('id'));
        return redirect('categorias')->with('sucesso', 'Categoria cadastrada com sucesso');
    }

    public function edit($id)
    {
        $categoria = Categoria::findOrFail($id);

        return view('pages.categorias.create', ['categoria' => $categoria]);
    }

    public function update(Request $request)
    {
        $categoria = Categoria::findOrFail($request->id);

        $categoria->update($request->all());

        return redirect('categorias')->with('sucesso', 'Categoria atualizada com sucesso');
    }

    public function destroy($id)
    {
        Categoria::findOrfail($id)->delete();

        return redirect('categorias')->with('sucesso', 'Categoria deletada com sucesso');
    }
}
