<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vendedores;

class VendedoresController extends Controller
{
    public function create()
    {
        return view('vendedor.vendedor');
    }

    public function store(Request $request)
    {
        Vendedores::create([
            'nome'  => $request->nome,
            'email' => $request->email,
        ]);

        return redirect()->back()->with('success','Vendedor Criado com Sucesso!');
    }
}
