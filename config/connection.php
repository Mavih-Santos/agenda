<?php
    function connectionDB(){
        $host = "localhost";
        $dbname = "agenda";
        $user = "root";
        $password = "071021";

        try{
            $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
            // Faz o PDO lançar exceções quando ocorrer algum erro, ou seja: Se acontecer qualquer erro nas operações com o banco de dados, lance uma exceção (Exception) em vez de apenas retornar um erro silencioso.
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        }catch(PDOException $e){
            //erro de conexão
            $error = $e->getMessage();
            echo "Erro de Conexão: " . $error;
        }
    }