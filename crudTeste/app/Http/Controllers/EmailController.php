<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\Mailer;
use App\Models\Venda;
use App\Models\Produto;

class EmailController extends Controller
{
    public function index()
    {
        return view('mail.mailer');
    }

    public function enviar(Request $request)
    {
        $vendas = Venda::query()->get();
        $valorTotal = 0;

        foreach($vendas as $venda) {

            if($venda->dataVenda == date('Y-m-d')) {
                $produto = Produto::find($venda->produto_id);
                $valorTotal += $produto->preco;
            }
        }

        Mail::to($request->email)->send(new Mailer($valorTotal));
        return back()->with('success', 'E-mail enviado com sucesso!');
    }
}
