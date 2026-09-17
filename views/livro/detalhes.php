<?php
require_once __DIR__ . "/../../templates/cabecalho.php";
require_once__DIR__ . "/../../models/livro.php";


if(isset($_GET['id'])) {
    $id = $_GET['id'];

    $livro = Livro::buscarporid($id);
} else {
    header("Location: /biblioteca/index.php");
    exit();
}

if(!$livro){
    header("location: /bibliteca/index.php");
    exit();
}

if(!$livro) {
    header("location: /biblioteeca/index.php");
}
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