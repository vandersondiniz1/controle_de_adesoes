@extends('layout.principal')
@section('conteudo')
<h3>Pesquisar Adesão pelo Número</h3>

<form action="{{ route('search') }}" method="GET">
    <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Digite o número de uma ADE" aria-describedby="basic-addon2"
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
            <th>Cliente</th>
            <th>Operação</th>
            <th>Produto</th>
            <th>Data da Venda</th>
            <th>Adesão</th>
            <th>Deletar</th>
        </tr>
        @foreach($adesao as $a)
        <tr>
            <td>{{ $a->id }}</td>
            <td>{{ $a->cpf }}</td>
            <td>{{ $a->cliente }}</td>
            <td>{{ $a->operacao }}</td>
            <td>{{ $a->produto }}</td>
            <td>{{ $a->data_venda }}</td>
            <td>{{ $a->adesao }}</td>
            <td>
                <a href="/adesoes/remove/{{$a->id}}" 
                onclick="return confirm('Deseja realmente excluir essa adesão?');">
                    <span class="glyphicon glyphicon-erase"></span>
                </a>
            </td>
        </tr>
        @endforeach
    </table>
    @stop