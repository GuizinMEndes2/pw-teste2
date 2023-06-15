<center>
@extends('includes.base')
@section('title', 'Produtos')

@section('content')

@if (session('sucesso'))
<div style="background-color:lawngreen; color:violet"><marquee speed="10">{{ session ('sucesso') }}</marquee></div>

@endif
    <table border="1" style="border-color:blue">
        <tr>
            <th style="text-align:left">Nome</th>
            <th style="text-align:left">Preço🤑</th>
            <th style="text-align:left">Quantidade</th>
            <th style="text-align:left">Editar</th>
            <th style="text-align:left">Apagar</th>
        </tr>
        @foreach ($prods as $prod )


        <tr>
            <td><a href="{{ route('produtos.view', $prod->id) }}">{{ $prod->name }}</a></td>
            <td>R$ {{ number_format($prod->price,2, ',', '.') }}</td>
            <td>{{ $prod->quantity}}</td>
            <td><a href="{{ route('produtos.edit', $prod->id) }}">Editar</a></td>
            <td><a href="{{ route('produtos.delete', $prod->id) }}">Apagar</a></td>
        </tr>
        @endforeach
    </table>

    <a href="{{ route('produtos.add') }}">Adicionar produtos</a>
    <hr  align="center" style="color:rgb(255, 0, 0)">
</center>
    @endsection

