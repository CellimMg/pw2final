<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;
use App\Models\Product;
use App\Models\Fornecedor;

class CarrinhoController extends Controller
{

    public function formAdicionar()
    {
        $fornecedores = Fornecedor::all();
        return view('form', compact('fornecedores'));
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
