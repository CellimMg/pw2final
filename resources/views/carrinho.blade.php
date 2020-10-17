@extends('welcome')

@section('conteudo-principal')
<div class="container">
    <table class="striped">
        <thead>
            <tr>
                <th>
                    Produto
                </th>
                <th>
                    Valor
                </th>
                <th>
                    Quantidade Estoque
                </th>
                <th>
                   Nome do Fornecedor
                </th>
            </tr>
            <tbody>
                @foreach ($produtos as $produto)
                    <tr>
                        <td>{{$produto->nome}}</td>
                        <td>R$ {{$produto->valor}}</td>
                        <td>{{$produto->quantidadeEstoque}}</td>
                        <td>{{$produto->fornecedor->nome}}</td>
                    </tr>
                @endforeach
            </tbody>
        </thead>
    </table>
</div>

<div class="fixed-action-btn">
    <a class = "btn-floating btn-large waves-effect waves-light red" href="{{url("/carrinho/adicionar")}}">
        <i class = "large material-icons">add</i>
    </a>
</div>

@endsection
