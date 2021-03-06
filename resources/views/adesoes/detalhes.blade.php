@extends('layout.principal')
@section('conteudo')
<nav aria-label="Navegação de página exemplo">
    <ul class="pagination justify-content-center">
        <li class="page-item">
            <a class="page-link" href="/home" tabindex="-1">Página Anterior</a>
        </li>
    </ul>
</nav>

<!--PRECISA MOSTRAR MAIS DE UMA ADESAO, SO ESTA MOSTRANDO UMA 
    SE ESTA DUPLICADA, TEM QUE MOSTRAR AS DUAS-->
<h1>Detalhes da adesão:
</h1>
<ul>
    <li>
        <b>Id:</b>
        {{$a->id}}
    </li>
    <li>
        <b>CPF:</b> R$
        {{$a->cpf}}
    </li>
    <li>
        <b>Cliente:</b>
        {{$a->cliente}}
    </li>
    <li>
        <b>Operação:</b>
        {{$a->operacao}}
    </li>
    <li>
        <b>Produto:</b>
        {{$a->produto}}
    </li>
    <li>
        <b>Data da Venda:</b>
        {{$a->data_venda}}
    </li>
    <li>
        <b>Adesão:</b>
        {{$a->adesao}}
    </li>
    <li>
        <b>Operador Venda:</b>
        {{$a->operador_venda}}
    </li>
</ul>
@stop