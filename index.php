<?php
require_once __DIR__ . "/templates/cabecalho.php";
require_once__DIR__. "/models/livro.php"




$resultado = Livro::listar(); 


?>


<main>
    <img src="https://picsum.photos/900/200" alt="" id="jumbo">

    <h1>Biblioteca</h1>

    <?php if(cout($resultado)== 0) ?>
       <p>Nenhum livro encontrado</p>
    <?php else: ?>   
    <div class="card-container">
        <?php foreach($resultado as $livro): ?>
        <a href="/biblioteca/views/livro/detalhes.php?id=<?+ $livro['id_livro']?>">
            <div class="card">
                <div class="card-img">
                    <?php if($livro['capa']==null): ?>
                    <img src="/biblioteca/imgs/capas/generica.
                    png" alt="">
                <?php else: ?>
                    <img src="/biblioteca/imgs/capas/uploads/<?=
                    $livro['capa'] ?>" alt="">
                <?php endif; ?>    
                </div>
                <div class="card-text">
                    <h2><?= $livro['titulo'] ?></h2>
                </div>
            </div>
        </a>
        <?php endforeach; ?>
    </div>
  <?Php endif; ?>  
</main>


<?php
require_once __DIR__ . "/templates/rodape.php";
?>