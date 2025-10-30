@extends('layouts.app')

@section('title','Novo Produto')

@section('content')
<h1>Novo Produto</h1>

@if ($errors->any())
  <div class="alert alert-danger">
    <ul>
      @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
@endif

<form action="{{ route('produtos.store') }}" method="POST">
  @csrf
  <div class="mb-3">
    <label class="form-label">Descrição</label>
    <input type="text" name="descricao" class="form-control" value="{{ old('descricao') }}" required>
  </div>
  <div class="mb-3">
    <label class="form-label">Quantidade</label>
    <input type="number" name="qtd" class="form-control" value="{{ old('qtd') }}" required>
  </div>
  <div class="mb-3">
    <label class="form-label">Preço Unitário</label>
    <input type="text" name="precoUnitario" class="form-control" value="{{ old('precoUnitario') }}" required>
  </div>
  <div class="mb-3">
    <label class="form-label">Preço Venda</label>
    <input type="text" name="precoVenda" class="form-control" value="{{ old('precoVenda') }}" required>
  </div>
  <button class="btn btn-primary">Salvar</button>
  <a href="{{ route('produtos.index') }}" class="btn btn-secondary">Voltar</a>
</form>
@endsection
