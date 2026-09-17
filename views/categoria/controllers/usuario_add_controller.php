<?php 
require_once__DIR__ . "/../models/usuario.php";

//receber os dados do front
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$senha = $password_hash($senha, PASSWORD_DEFAULT);

if (!empty($_FILES['foto']['name'])) {
    $foto = $_FILES['foto'];
    $extensao = strtolower(pathinfo($foto['nome'], PATHINFO_EXTENSION));
    $nomedafoto = uniqid() .'.'. $extensao;
    $caminho = __DIR__ . "/../imgs/fotos/uploads/" . $nomedafoto;
    move_uploaded_file($foto['tmp_name'], $caminho);
} else {
    $foto = null;
}

// criar um obj do tipo usuario para usar ou inserir
$usuario = New Usurario();
$usuario->iserir($nome, $email, $senha, $foto);

//redirecinar
header('Location: / biblioteca/views/usuario/login.php');
exit();