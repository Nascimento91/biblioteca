<?php
require_once __DIR__ . "/../../templates/cabecalho.php";
?>

<main class="main-detalhes">
    <div class="login-card">
        <h2>Acesse sua conta</h2>

        <form action="#" method="post">
            <div class="input-group">
                <label for="email">E-mail</label>
                <input type="email" id="email" name="email" placeholder="seu@email.com" required>
            </div>

            <div class="input-group">
                <label for="password">Senha</label>
                <input type="password" id="password" name="password" placeholder="Digie sua senha" required>
            </div>

            <div class="form-options">
                <a href="#">Esqueceu senha</a>
            </div>

            <button type="submit" class="btn-login">Entrar</button>



        </form>

    </div>

</main>

<?php
require_once __DIR__ . "/../../templates/rodape.php";
?>