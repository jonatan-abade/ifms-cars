<?php

namespace App\Http\Controllers;

use App\Http\Requests\CarroRequest;
use App\Models\Carro;
use App\Models\Categoria;
use Illuminate\Http\Request;

class CarroController extends Controller
{
    public function index()
    {
        $carros = Carro::all();

        return view('pages.carros.index', [
            'carros' => $carros,

        ]);
    }

    public function create()
    {
        $categorias = Categoria::all();

        return view('pages.carros.create', [
            'categorias' => $categorias,
        ]);
    }

    public function store(CarroRequest $request)
    {
        $data = $request->all();
        //image upload
        if($request->hasFile('imagens') && $request->file('imagens')->isValid()){
            $fileName = md5($request->imagens) . '.' .$request->imagens->extension();
            $request->imagens->move(public_path('imagens'), $fileName);
            $data['imagens'] =  $fileName;
        }

        Carro::create($data);
        return redirect('carros')->with('sucesso', 'Carro cadastrada com sucesso');
    }

    public function edit($id)
    {
        $categorias = Categoria::all();
        $carro = Carro::findOrFail($id);

        return view('pages.carros.create', [
            'carro' => $carro,
            'categorias' => $categorias,
        ]);
    }

    public function update(Request $request)
    {
        $carro = Carro::findOrFail($request->id);

        $carro->update($request->all());

        return redirect('carros')->with('sucesso', 'Carro atualizada com sucesso');
    }

    public function destroy($id)
    {
        Carro::findOrfail($id)->delete();
        return redirect('carros')->with('sucesso', 'Carro deletado com sucesso');
    }

    public function show($id)
    {
        return view('pages.carros.show', [
            'carro' => Carro::findOrfail($id),
        ]);
    }
}
