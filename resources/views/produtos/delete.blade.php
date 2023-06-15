@extends('includes.base')
@section('title', 'Produtos')

@section('content')

<h2>Apagar produtos</h2>
<p>You está preste a Delet {{ $prod->name }}.</p>
<p>Tens Certeza disso?
</p>

<form action="{{ route('produtos.deleteForReal', $prod->id) }}" method="post">
    @csrf
    @method('delete')
    @method('delete')
<input type="submit" value="AI pai para, apagar ">
</form>
@endsection
