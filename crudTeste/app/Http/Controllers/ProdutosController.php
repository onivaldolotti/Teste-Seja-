<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class ProdutosController extends Controller
{
    public function create()
    {
        return view('produtos.produto');
    }

    public function store(Request $request)
    {
        Produto::create([
            'nome'  => $request->nome,
            'preco' => $request->preco,
        ]);

        return redirect()->back()->with('success','Produto criado com sucesso!');
    }    
    
}
