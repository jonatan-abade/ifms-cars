<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carro;
use App\Models\Moto;

class PagesController extends Controller
{
    public function index()
    {
        return view('pages.home', [
            'carros' => Carro::orderBy('created_at', 'DESC')->take(3)->get(),
            'motos' => Moto::orderBy('created_at', 'DESC')->take(3)->get(),
        ]);
    }
    public function sobre()
    {
        return view('pages.sobre');
    }
}
