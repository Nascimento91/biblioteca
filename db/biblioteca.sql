CREAT DATABASE IF NOT EXISTS biblioteca;

USE biblioteca;

CREAT TABLE IF NOT EXISTS categoria (
    id_categoria INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(255) NOT NULL INIQUE
);

CREAT TABLE IF NOT EXISTS LIVRO(
    id_livro INT PRIMARY KEY AUTO_INCREMENT,
    titulo VARCHAR(255) NOT NULL,
    ano_pub VARCHAR(4),
    autor VARCHAR(255),
    resumo TEXT,
    capa VARCHAR(255),
    id_categoria INT,
    FOREIGN KEY (id_categoria) RFERENCE
);

CREAT TABLE IF NOT EXISTS usuario (
    id_usuario INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR NOT NULL, 
    email VARCHAR NOT NULL UNIQUE,
    senha VARCHAR NOT NULL,
    foto VARCHAR
);

--sed
INSERT INTO categoria (nome) VALUES ("Romance"), ("Terror"),("Fantasia");

INSERT INTO livro (tiutlo, ano_pub, autor, resumo, id_categoria)
VALUES ("Orgulho e preconceto ,"1813", "Jane Austen", "loeemipsum",1), ("it: A Coisa" )