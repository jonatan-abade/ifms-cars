<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carro;

class PagesController extends Controller
{
    public function index()
    {
        return view('pages.home', [
            'carros' => Carro::all(),
        ]);
    }
}
