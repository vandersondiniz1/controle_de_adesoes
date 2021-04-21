@extends('layout.principal')
@section('conteudo')
<h3>Editar Usuário</h3>

<form action="{{ route('editar_usuario', ['id' => $usuario->id]) }}" method="POST">
    @csrf
    <label for="">Id</label> <br />
    <input type="text" name="id" value="{{ $usuario->id}}" readonly=“true”> <br />
    <label for="">Nome</label> <br />
    <input type="text" name="nome" size=30 value="{{ $usuario->nome}}"> <br />
    <label for="">Supervisor</label> <br />
    <input type="text" name="supervisor" size=30 value="{{ $usuario->supervisor}}"> <br />
    <label for="">Campanha</label> <br />
    <input type="text" name="campanha" size=30 value="{{ $usuario->campanha}}"> <br />
    <label for="">Permissão</label> <br />
    <input type="text" name="permissao" size=30 value="{{ $usuario->permissao}}"> <br />
    <label for="">Skill</label> <br />
    <input type="text" name="skill" size=30 value="{{ $usuario->skill}}"> <br />
    <button>salvar</button>
</form>
@stop