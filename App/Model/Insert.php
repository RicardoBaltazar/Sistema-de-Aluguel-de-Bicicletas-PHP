<?php
require_once 'Config.php';

Class InsertConnect {
    
    public function insertDatabase($name, $email, $password, $nivel){
        try{
        $insert = DatabaseConnect::connect()->prepare('INSERT INTO users(name, email, password, nivel) 
        VALUES(:name, :email, :password, :nivel)');
        $insert->bindParam(":name", $name);
        $insert->bindParam(":email", $email);
        $insert->bindParam(":password", $password);
        $insert->bindParam(":nivel", $nivel);
        $executeInsert = $insert->execute();

            if($executeInsert){
                header('location:?page=home&parameter=Dados Cadastrados com sucesso! ');
            }
        } catch (PDOException $error) {
            echo 'Erro com banco de dados '.$error ->getMessage();
            exit();
        } catch(Exception $error) {
            echo 'Erro generico '.$error ->getMessage();
            exit();
        }
    }
}


