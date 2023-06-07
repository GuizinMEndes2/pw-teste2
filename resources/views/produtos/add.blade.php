@extends('includes.base')

@section('title', 'Produtos - Adicionar')

@section('content')
<center>
    <h2 style="color:chartreuse">Adicione seu produto</h2>

    @if ($errors)
    @foreach ($errors->all() as $err )
    {{ $err }}<br>
    @endforeach

    @endif


        <form action="{{ url()->current() }}" method="post">
        @csrf
        <input type="text" name="name" placeholder="Nome" value="{{ old('name', $prod->name ?? '') }}">
        <br>
        <input type="number" name="price" step="0.01" placeholder="Preço" value="{{ old('price',  $prod->price ?? '') }}">
        <br>
        <input type="number" name="quantity" placeholder="Quantidade" min="0" value="{{ old('quantity',  $prod->quantity ?? '') }}">
       <br>
        <input type="submit" value="Gravar">
        <hr width="15%" align="center" style="color:rgb(255, 0, 0)">
    </form>
</center>
@endsection
