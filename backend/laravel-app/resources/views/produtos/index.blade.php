@extends('layouts.app')

@section('title','Lista de Produtos')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
  <h1>Produtos</h1>
  <a href="{{ route('produtos.create') }}" class="btn btn-success">Novo Produto</a>
</div>

@if(session('success'))
  <div class="alert alert-success">{{ session('success') }}</div>
@endif

<table class="table table-striped">
  <thead>
    <tr>
      <th>#</th>
      <th>Descrição</th>
      <th>Qtd</th>
      <th>Preço Unit.</th>
      <th>Preço Venda</th>
      <th>Ações</th>
    </tr>
  </thead>
  <tbody>
    @foreach($produtos as $produto)
      <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $produto->descricao }}</td>
        <td>{{ $produto->qtd }}</td>
        <td>{{ number_format($produto->precoUnitario,2,',','.') }}</td>
        <td>{{ number_format($produto->precoVenda,2,',','.') }}</td>
        <td>
          <a href="{{ route('produtos.show',$produto) }}" class="btn btn-sm btn-primary">Ver</a>
          <a href="{{ route('produtos.edit',$produto) }}" class="btn btn-sm btn-warning">Editar</a>
          <form action="{{ route('produtos.destroy',$produto) }}" method="POST" style="display:inline">
            @csrf
            @method('DELETE')
            <button class="btn btn-sm btn-danger" onclick="return confirm('Excluir?')">Excluir</button>
          </form>
        </td>
      </tr>
    @endforeach
  </tbody>
</table>

{{ $produtos->links() }}
@endsection
