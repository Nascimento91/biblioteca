<?php
require_once __DIR__ . "/../../templates/cabecalho.php";
require_once__DIR__ . "/../../models/livro.php";

$id = $_GET['id'];

$livro = livro::buscarporid($id);

?>


<main class="main-detalhes">

    <div id="img-detalhe">
        <img src="https://picsum.photos/300/400" alt="">
    </div>

    <div id="texto-detalhes">
        <h2><?= $livro['titulo'] ?></h2>
        <br>
        <p><?= $livro['ano_pub'] ?></p>        
        <br>
        <p><?= $livro['autor'] ?></p>
        <br>
        <p><?= $livro['nome'] ?></p>
        <br>
        <p><?=$livro['resumo']  ?></p>
        <br>
    </div>

</main>

<?php
require_once __DIR__ . "/../../templates/rodape.php";
?>