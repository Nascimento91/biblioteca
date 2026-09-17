<?php
require_once __DIR__ . "/../../templates/cabecalho.php";
?>
<h1>Cadastro de livros</h1>

<form action="" method="POST">

    <label>Titulo</label>
    <input type="text" name="titulo" required>

    <br>

    <label">Autor</label>
        <input type="text" name="autor" required>
        <br>
</form>

<?php
require_once __DIR__ . "/../../templates/rodape.php";
?>