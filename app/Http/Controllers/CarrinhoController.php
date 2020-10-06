<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;
use App\Models\Product;

class CarrinhoController extends Controller
{

    public function formAdicionar()
    {
        return view('form');
    }

    public function adicionar(ProductRequest $request)
    {
        Product::create($request -> all());
        return redirect('/carrinho');
    }

    public function getProdutos(){
        $produtos = Product::all();
        return view('carrinho', compact('produtos'));
    }
}
