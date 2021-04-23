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
    <!-- <input type="text" name="supervisor" size=30 value="{{ $usuario->supervisor}}"> <br /> -->
    <select name="supervisor">
        <option selected>{{ $usuario->supervisor}}</option>
        <option value="KAMILLA PEREIRA DOS SANTOS">KAMILLA PEREIRA DOS SANTOS</option>
        <option value="VANESSA DA COSTA OLIVEIRA">VANESSA DA COSTA OLIVEIRA</option>
        <option value="ERIKA DANNIELLE DE OLIVEIRA ROSA">ERIKA DANNIELLE DE OLIVEIRA ROSA</option>
        <option value="THAYANA XAVIER ALVES CAVALCANTE">THAYANA XAVIER ALVES CAVALCANTE</option>
        <option value="SÂMYA SHEYLA COSTA FRANCISCO">SÂMYA SHEYLA COSTA FRANCISCO</option>
    </select>
    <br />

    <label for="">Campanha</label> <br />
    <!-- <input type="text" name="campanha" size=30 value="{{ $usuario->campanha}}"> <br /> -->
    <select name="campanha">
        <option selected>{{ $usuario->campanha}}</option>
        <option value="PAN REFIN">PAN REFIN</option>
        <option value="REFIN ITAU MEDIO">REFIN ITAU MEDIO</option>
        <option value="REFIN ITAU ALTO">REFIN ITAU ALTO</option>
        <option value="PAN SEGUROS">PAN SEGUROS</option>
        <option value="BMG STAND ALONE">BMG STAND ALONE</option>
        <option value="BMG DIGITAL">BMG DIGITAL</option>
        <option value="SUPERVISAO DE TI">SUPERVISAO DE TI</option>
        <option value="PAN SAQUE COMPLEMENTAR">PAN SAQUE COMPLEMENTAR</option>
    </select>
    <br />

    <label for="">Permissão</label> <br />
    <!-- <input type="text" name="permissao" size=30 value="{{ $usuario->permissao}}"> <br /> -->
    <select name="permissao">
        <option selected>{{ $usuario->permissao}}</option>
        <option value="OPERADOR">OPERADOR</option>
        <option value="ANALISTA">ANALISTA</option>
        <option value="SUPERVISOR">SUPERVISOR</option>
        <option value="FINANCEIRO">FINANCEIRO</option>
        <option value="PLANEJAMENTO">PLANEJAMENTO</option>
        <option value="SUPERVISOR PLENO">SUPERVISOR PLENO</option>
        <option value="RH">RH</option>
        <option value="TECNOLOGIA">TECNOLOGIA</option>
        <option value="ADMIN">ADMIN</option>
    </select>
    <br />

    <label for="">Skill</label> <br />
    <!--<input type="text" name="skill" size=30 value="{{ $usuario->skill}}"> <br />-->
    <select name="skill">
        <option selected>{{ $usuario->skill}}</option>
        <option value="PAN DIGITAL">PAN DIGITAL</option>
        <option value="ITAU DIGITAL">ITAU DIGITAL</option>
        <option value="BMG STAND ALONE">BMG STAND ALONE</option>
        <option value="BACKOFFICE">BACKOFFICE</option>
        <option value="PAN SAQUE COMPLEMENTAR">PAN SAQUE COMPLEMENTAR</option>
        <option value="MONITORIA">MONITORIA</option>
        <option value="BMG DIGITAL">BMG DIGITAL</option>
        <option value="ADMIN">ADMIN</option>
    </select>
    <br />

    <button>salvar</button>
</form>
@stop