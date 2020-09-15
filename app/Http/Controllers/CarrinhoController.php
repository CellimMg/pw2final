<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class CarrinhoController extends Controller
{


    public function getProdutos(){

        $total = 0;

        $produtos = [[
            'produto' => 'Ração Dog Show 15kg',
            'valor' => 130.50,
            'quantidade' => 2,
            'total' => 261.0
        ],[
            'produto' => 'Ração Golden 15kg',
            'valor' => 100.0,
            'quantidade' => 4,
            'total' => 400.0
        ],[

            'produto' => 'Ração Royal Canin 15kg',
            'valor' => 180.0,
            'quantidade' => 2,
            'total' => 360.0
        ]];

        foreach ($produtos as $produto) {
            $total += $produto['total'];

        }


        return view('carrinho', compact('produtos', 'total'));
    }
}
