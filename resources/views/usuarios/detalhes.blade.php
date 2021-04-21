@extends('layout.principal')
@section('conteudo')

<h1>Usuário Atualizado:
</h1>
<ul>
    <li>
        <b>Id:</b>
        {{$u->id}}
    </li>
    <li>
        <b>Nome:</b>
        {{$u->nome}}
    </li>
    <li>
        <b>Supervisor:</b>
        {{$u->supervisor}}
    </li>
    <li>
        <b>Campanha:</b>
        {{$u->campanha}}
    </li>
    <li>
        <b>Permissão:</b>
        {{$u->permissao}}
    </li>
    <li>
        <b>Skill:</b>
        {{$u->skill}}
    </li>
    <li>
        <b>Alteração Realizada por:</b>
        {{Auth::user()->name}}
    </li>
    <li>
        <b>Alteração Realizada em:</b>
        {{Auth::user()->updated_at}}
    </li>
</ul>
@stop