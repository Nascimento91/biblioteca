<?php
require_once __DIR__ . "/../../templates/cabecalho.php";
?>

<main class="container-centralizar">
        <div class="container-perfil">
          <div class="itens-perfil">
                <p>Nome da pessoa</p>
                <p>Email da pessoa </p>
          </div>
          <div class="itens-perfil">
                <a href="/biblioteca/views/categoria/gerenciar_categoria.php" 
                class="link-btn">gerenciar_categoria</a>
                <a href="/biblioteca/views/livro/gereciar_categorias.php" class=link-btn>Gereciar Livro</a>
          </div>
        </div>
</main>
    
<?php
require_once __DIR__ . "/../../templates/rodape.php";
?>>