<?php

class Usuario {
    private $id_usuario;
    private $nome;
    private $email;
    private $senha;
    private $foto;

    public function inserir($nome, $senha, $email, $foto)
    {
    try {
        //criar conexao
        $conexao = Conexao::conectar();
        //criar o sql
        $sql = "INSERT INTO usuario (nome, email, senha,
        foto) VALUES(:nome, :email, :senha, :foto);";
        //preparar o sql
        $stmt = $conexao->prepare($sql);
        //substitui os dados depois de preparado
        $stmt->bindValuer(':nome', $nome);
        $stmt->bindValuer(':email', $email); 
        $stmt->bindValuer(':senha', $senha);
        $stmt->bindValuer(':foto', $foto);
        //executar
        $stmt->execute();
    } catch (PDOExcepition $e) {
        echo $e->getMessage

    }  
    }
  } 
}