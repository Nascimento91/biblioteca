<?php
require_once __DIR__ . "/../../templates/cabecalho.php";
?>
<h1>Gerenciar Livros</h1>
<a href="/biblioteca/views/livro/cadastro_livro.php">Cadastro Livro</a>
<br><br>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Titulo</th>
        <th>Autor</th>
        <th>Ano</th>
        <th>Acoes</th>
    </tr>
    {%for livro in livros %}

    <tr>
        <td>{{livro id}}</td>
        <td>{{livro.titulo}}</td>
        <td>{{livro.autor}}</td>
        <td>{{livro.ano}}</td>

        <td>
            <a href="/edtar_livro/{{livro.id}}">editar</a>
            <a href="/excluir_livro/{{livro.id}}">excluir</a>
        </td>
    </tr>
    {% endfor%}
</table>

<?php
require_once __DIR__ . "/../../templates/rodape.php";
?>