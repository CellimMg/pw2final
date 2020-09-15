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
                    Quantidade
                </th>
                <th>
                    Total
                </th>
            </tr>
            <tbody>
                @foreach ($produtos as $produto)
                    <tr>
                        <td>{{$produto['produto']}}</td>
                        <td>{{$produto['valor']}}</td>
                        <td>{{$produto['quantidade']}}</td>
                        <td>{{$produto['total']}}</td>
                    </tr>
                @endforeach
                <tr>
                    <td>TOTAL</td>
                    <td></td>
                    <td></td>
                    <td>R$ {{$total}}</td>
                </tr>
            </tbody>
        </thead>
    </table>
</div>
@endsection
