<?php


class conexao{
    public static funcion conectar(){
        $env = $env['DB_HODT'];
        $db = $env['DB_NAME'];
        $user = $env['DB_USER'];
        $pass = $env['DB_PASS'];

        $conn = new PDO("mysql:hodt=$host;dbname=charset=utf8mb4" $user, $pass); 
        
        $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $conn->setAttribute(PDO ::ATTR_DEFAULT_FETCH_MODE, PDOI::FECH_ASSOC);


        return $conn;
        
    };
};