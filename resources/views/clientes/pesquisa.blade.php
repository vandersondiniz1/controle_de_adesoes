@extends('layout.principal')
@section('conteudo')
<h3>Pesquisar Clientes pelo Nome</h3>

<form action="{{ route('search') }}" method="GET">
    <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Digite o nome de um cliente" aria-describedby="basic-addon2"
            name="search">
        <div class="input-group-append">
            <button class="btn btn-secondary" type="submit">Buscar</button>
        </div>
    </div>
</form>
<div class="icon-home">
    <h3>Resultado da Pesquisa</h3>
    <table class="table table-striped">
        <tr>
            <th>ID</th>
            <th>CPF</th>
            <th>Nome</th>
            <th>Nascimento</th>
            <th>Número do Benefício</th>
            <th>Tipo de Cliente</th>
            <th>Cidade</th>
            <th>Deletar</th>
        </tr>
        @foreach($cliente as $c)
        <tr>
            <td>{{ $c->id }}</td>
            <td>{{ $c->cpf }}</td>
            <td>{{ $c->nome }}</td>
            <td>{{ $c->nascimento }}</td>
            <td>{{ $c->n_beneficio }}</td>
            <td>{{ $c->tipo_cliente }}</td>
            <td>{{ $c->cidade }}</td>
            <td>
                <a href="/clientes/remove/{{$c->id}}" 
                onclick="return confirm('Deseja realmente excluir esse cliente?');">
                    <span class="glyphicon glyphicon-erase"></span>
                </a>
            </td>
        </tr>
        @endforeach
    </table>
    @stop