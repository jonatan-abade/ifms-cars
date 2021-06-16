<?php

namespace App\Http\Controllers;

use App\Http\Requests\CarroRequest;
use App\Models\Categoria;
use App\Models\Moto;
use Illuminate\Http\Request;

class MotoController extends Controller
{
    public function index()
    {
        $motos = Moto::all();

        return view('pages.motos.index', [
            'motos' => $motos,

        ]);
    }

    public function create()
    {
        $categorias = Categoria::all();

        return view('pages.motos.create', [
            'categorias' => $categorias,
        ]);
    }

    public function store(CarroRequest $request)
    {
        $data = $request->except(['id']);
        //image upload
        if ($request->hasFile('imagens') && $request->file('imagens')->isValid()) {
            $fileName = md5($request->imagens) . '.' . $request->imagens->extension();
            $request->imagens->move(public_path('imagens'), $fileName);
            $data['imagens'] =  $fileName;
        }
        $data['imagens'] =  isset($data['imagens']) ? $data['imagens'] : "";
        Moto::create($data);
        return redirect('motos')->with('sucesso', 'Moto cadastrada com sucesso');
    }

    public function edit($id)
    {
        $categorias = Categoria::all();
        $moto = Moto::findOrFail($id);

        return view('pages.motos.create', [
            'moto' => $moto,
            'categorias' => $categorias,
        ]);
    }

    public function update(Request $request)
    {
        $moto = Moto::findOrFail($request->id);
        $data = $request->all();

        if ($request->hasFile('imagens') && $request->file('imagens')->isValid()) {
            $fileName = md5($request->imagens) . '.' . $request->imagens->extension();
            $request->imagens->move(public_path('imagens'), $fileName);
            $data['imagens'] =  $fileName;
        }

        $data['imagens'] =  isset($data['imagens']) ? $data['imagens'] :  $moto->imagens;
        $moto->update($data);

        return redirect('motos')->with('sucesso', 'Moto atualizada com sucesso');
    }

    public function destroy($id)
    {
        Moto::findOrfail($id)->delete();
        return redirect('motos')->with('sucesso', 'Moto deletado com sucesso');
    }

    public function show($id)
    {
        return view('pages.motos.show', [
            'moto' => Moto::findOrfail($id),
        ]);
    }
}
