<?php
require_once__DIR__ . "/../configs/conexao.php";


class livro {
    private $id_livro;
    private $titulo;
    private $ano_pub;
    private $autor;
    private $resumo;
    private $capa;
    private $catgoria;
    
    public static funcion listar() {
        try {
            $conexao = Conexao::conectar();
            $sql = "SELECT livro.*, categoria.nome  FROM livro JOIN categoria ON livro.
            id_categoria = categoria.id_categoria WERE id_livro = :id";
            $stmt = $conexao->prepare($sql);           
            $stmt = execute();
            return $stmt->fetchall();
        } catch (PDOException $e) {
            echo 'erro ao listar livro: ' . $e->getMessage();

        }
    }

    public static function buscarpgrid($id){
        try {
            $conexao = Conexao::conectar();
            $sql = "SELECT livro,*, categoria.nome FROM livro JOIN categoria ON livro. id_categoria = categgoria,id_categoria HERE id_livro = id";
            $stmt = conexao->prepare($sql);
            $stmt->bindValuer(':id', $id);
            $stmt = execute();
            return $stmt->fetch();
        } catch (PDOException $e) {
            ECHO 'Erro ao buscar o livro:' , $e->getMessage();
        }
    }
}