@extends('includes.base')
@section('title', 'Produtos - Adicionar')

@section('content')
    <h2>Adicione seu produto</h2>

    <form action="{{ route('produtos.addSave') }}" method="post">
        @csrf
        <input type="text" name="name" placeholder="Nome">
        <br>
        <input type="number" name="price" step="0.01" placeholder="Preço">
        <br>
        <input type="number" name="quantity" placeholder="Quantidade" min="0">
        <hr width="15%" align="left">
        <input type="submit" value="Gravar">
    </form>

@endsection
