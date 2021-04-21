@extends('layout.principal')
@section('conteudo')
<h3>Pesquisar Usuário</h3>

<form action="{{ route('search') }}" method="GET">
    <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Digite um cpf ou nome" aria-describedby="basic-addon2"
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
            <th>Nome</th>
            <th>Supervisor</th>
            <th>Campanha</th>
            <th>Permissão</th>
            <th>Skill</th>
            <th>Editar</th>
        </tr>
        @foreach($usuario as $u)
        <tr>
            <td>{{ $u->id }}</td>
            <td>{{ $u->nome }}</td>
            <td>{{ $u->supervisor }}</td>
            <td>{{ $u->campanha }}</td>
            <td>{{ $u->permissao }}</td>
            <td>{{ $u->skill }}</td>
            <td>
                <a href="/usuarios/edita/{{$u->id}}" 
                onclick="return confirm('Deseja realmente fazer alteração nesse usuário?');">
                    <span class="glyphicon glyphicon-edit"></span>
                </a>
            </td>
        </tr>
        @endforeach
    </table>
    @stop