<?php
require_once __DIR__ . "/../../templates/cabecalho.php";
?>
<main class="container">
    <div clas="tituilo-pagina">
        <h2>Gerenciar_categoria</h2>
        <p>visualize,edite ou exclua as categorias Cadastro</p>
    </div>

    <div class="acoes">
        <a href="/biblioteca/views/categoria/cadastro_categoria.php" class="btn-cadastrar">
            +nova Ctegoria
        </a>
    </div>
    {% if categorias%}

    <div class="tabela-container">

        <table>

            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome ca categoria</th>
                </tr>
            </thead>
        </table>
    </div>
</main>
<?php
require_once __DIR__ . "/../../templates/rodape.php";
?>