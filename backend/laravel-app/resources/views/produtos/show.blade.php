@extends('layouts.app')

@section('title','Ver Produto')

@section('content')
<h1>Produto</h1>

<div class="card">
  <div class="card-body">
    <h5 class="card-title">{{ $produto->descricao }}</h5>
    <p class="card-text"><strong>Quantidade:</strong> {{ $produto->qtd }}</p>
    <p class="card-text"><strong>Preço Unitário:</strong> {{ number_format($produto->precoUnitario,2,',','.') }}</p>
    <p class="card-text"><strong>Preço Venda:</strong> {{ number_format($produto->precoVenda,2,',','.') }}</p>
    <a href="{{ route('produtos.edit', $produto) }}" class="btn btn-warning">Editar</a>
    <a href="{{ route('produtos.index') }}" class="btn btn-secondary">Voltar</a>
  </div>
</div>
@endsection
