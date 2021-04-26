@extends('layout.principal')
@section('conteudo')
<nav aria-label="Navegação de página exemplo">
    <ul class="pagination justify-content-center">
        <li class="page-item">
            <a class="page-link" href="/usuarios/pesquisa" tabindex="-1">Página Anterior</a>
        </li>
    </ul>
</nav>
<h3>Pesquisa por Supervisor</h3>

<form action="{{ route('usuarios_search_varios') }}" method="GET">
    <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Digite a inicial de um supervisor"
            aria-describedby="basic-addon2" name="usuarios_search_varios">
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
            <th>Salvar</th>
        </tr>
        @foreach($usuario as $u)
        <tr>
            <td>{{ $u->id }}</td>
            <td>{{ $u->nome }}</td>
            <td>
                <!--{{ $u->supervisor }}-->
                <select name="supervisor">
                    <option selected>{{ $u->supervisor}}</option>
                    <option value="KAMILLA PEREIRA DOS SANTOS">KAMILLA PEREIRA DOS SANTOS</option>
                    <option value="VANESSA DA COSTA OLIVEIRA">VANESSA DA COSTA OLIVEIRA</option>
                    <option value="ERIKA DANNIELLE DE OLIVEIRA ROSA">ERIKA DANNIELLE DE OLIVEIRA ROSA</option>
                    <option value="THAYANA XAVIER ALVES CAVALCANTE">THAYANA XAVIER ALVES CAVALCANTE</option>
                    <option value="SÂMYA SHEYLA COSTA FRANCISCO">SÂMYA SHEYLA COSTA FRANCISCO</option>
                </select>
            </td>
            <td>
                <!--{{ $u->campanha }}-->
                <select name="campanha">
                    <option selected>{{ $u->campanha}}</option>
                    <option value="PAN REFIN">PAN REFIN</option>
                    <option value="REFIN ITAU MEDIO">REFIN ITAU MEDIO</option>
                    <option value="REFIN ITAU ALTO">REFIN ITAU ALTO</option>
                    <option value="PAN SEGUROS">PAN SEGUROS</option>
                    <option value="BMG STAND ALONE">BMG STAND ALONE</option>
                    <option value="BMG DIGITAL">BMG DIGITAL</option>
                    <option value="SUPERVISAO DE TI">SUPERVISAO DE TI</option>
                    <option value="PAN SAQUE COMPLEMENTAR">PAN SAQUE COMPLEMENTAR</option>
                </select>
            </td>
            <td><!--{{ $u->permissao }}-->
                <select name="permissao">
                    <option selected>{{ $u->permissao}}</option>
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
            </td>
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