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
        $dataForm = $request->all();

        $file = $dataForm['imagens'];

        if ($file->isValid()) {
            $nameFile = uniqid(date('Ymdhis')) . '.' . $file->getClientOriginalExtension();
            $file = $file->storeAs('imagens', $nameFile);
        }
        $dataForm['imagens'] = $file;

        Carro::create($dataForm);
        return redirect('carros')->with('sucesso', 'Carro cadastrada com sucesso');
    }
}
