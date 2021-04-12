@extends('layout.principal')
@section('conteudo')
@if(empty($adesoes))
<div class="alert alert-danger">
    Você não tem nenhuma adesão duplicada.
</div>
@else
<h1>Listagem de Todas as Adesões Duplicadas</h1>
<table class="table table-striped table-bordered table-hover">
    <tr>
        <th>Id</th>
        <th>Adesão</th>
        <th>Cliente</th>
        <th>Visualizar</th>
        <th>Editar</th>
        <th>Deletar</th>
    </tr>
    @foreach ($adesoes as $a)
    <tr class="{{$a->cliente>=3 ? 'danger' : '' }}">
        <td>
            {{$a->id}}
        </td>
        <td>
            {{$a->adesao}}
        </td>
        <td>
            {{$a->cliente}}
        </td>
        <td>
            <a href="/adesoes/mostra/{{$a->adesao}}">
                <span class="glyphicon glyphicon-search"></span>
            </a>
        </td>
        <td>
            <!--<a href="/adesoes/edita">-->
            <a href="#">
                <span class="glyphicon glyphicon-edit"></span>
            </a>
        </td>
        <td>
            <a href="/adesoes/remove/{{$a->id}}">
                <span class="glyphicon glyphicon-erase"></span>
            </a>
        </td>
    </tr>
    @endforeach
    @endif
</table>
<h4>
    <span class="label label-danger pull-right">
        Alerta: duas ou mais adesões para um mesmo cliente
    </span>
</h4>
@stop