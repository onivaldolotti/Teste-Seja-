<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Venda, Produto, Vendedores};
use Carbon\Carbon;

class VendasController extends Controller
{
    public function create()
    {
        $produtos  = Produto::query()->get();
        $vendedores = Vendedores::query()->get(); 

        return view('vendas.venda', compact('produtos','vendedores'));
    }

    public function store(Request $request)
    {
        $produto = Produto::find($request->produtoId);

        Venda::create([
            'vendedor_id' => $request->vendedorId,
            'produto_id'  => $request->produtoId,
            'comissao'    => $produto->preco*0.085,
            'dataVenda'   => date('Y-m-d'),
        ]);

        return redirect()->back()->with('success','Venda Efetuada com Sucesso!');
    }

    public function listar(Request $request)
    {
        $vendas = Venda::query()->orderBy('vendedor_id')->get();

        
        $vendas->map(function ($venda) {

            $vendedor = Vendedores::find($venda->vendedor_id);
            $produto = Produto::find($venda->produto_id);
            
            $venda['vendedor_nome']  = $vendedor->nome;
            $venda['vendedor_email'] = $vendedor->email;
            $venda['produto_preco']  = $produto->preco;
            $venda['dataVenda']      = date('d/m/Y', strtotime($venda['dataVenda']));
            
            return $venda;
        });
        
        
        return view('vendas.index', compact('vendas'));
    }
}
