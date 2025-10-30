@extends('layouts.app')

@section('title','Editar Produto')

@section('content')
<h1>Editar Produto</h1>

@if ($errors->any())
  <div class="alert alert-danger">
    <ul>
      @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
@endif

<form action="{{ route('produtos.update', $produto) }}" method="POST">
  @csrf
  @method('PUT')
  <div class="mb-3">
    <label class="form-label">Descrição</label>
    <input type="text" name="descricao" class="form-control" value="{{ old('descricao', $produto->descricao) }}" required>
  </div>
  <div class="mb-3">
    <label class="form-label">Quantidade</label>
    <input type="number" name="qtd" class="form-control" value="{{ old('qtd', $produto->qtd) }}" required>
  </div>
  <div class="mb-3">
    <label class="form-label">Preço Unitário</label>
    <input type="text" name="precoUnitario" class="form-control" value="{{ old('precoUnitario', $produto->precoUnitario) }}" required>
  </div>
  <div class="mb-3">
    <label class="form-label">Preço Venda</label>
    <input type="text" name="precoVenda" class="form-control" value="{{ old('precoVenda', $produto->precoVenda) }}" required>
  </div>
  <button class="btn btn-primary">Atualizar</button>
  <a href="{{ route('produtos.index') }}" class="btn btn-secondary">Voltar</a>
</form>
@endsection
