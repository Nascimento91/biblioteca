<?php
require_once __DIR__ . "/../../templates/cabecalho.php";
?>
<main class="main-detalhes">
    <form action="" method="post" enctype="multipart/form-data">


      <div class="form-item">
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome">
      </div>

      <div class="form-item">
        <label for="email">Email</label>
        <input type="text" name="email" id="email">
      </div>

      <div class="form-item">
        <label for="senha">senha</label>
        <input type="password" name="senha" id="senha">
      </div>

      <div class="form-item">
        <label for="foto">Foto de perfil</label>
        <input type="file" name="foto" id="foto">
      </div>
      <button type="submit"Cadatrar></button>

    </form>

   

</main>


<?php
require_once __DIR__ . "/../../templates/rodape.php";
?>