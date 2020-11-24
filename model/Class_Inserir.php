<?php
require_once 'Config.php';

Class InsertConnect extends DatabaseConnect {
    
    public function insertDatabase($name, $email, $password, $nivel){
        try{
        $insert = $this->pdo->prepare('INSERT INTO users(name, email, password, nivel) 
        VALUES(:name, :email, :password, :nivel)');
        $insert->bindParam(":name", $name);
        $insert->bindParam(":email", $email);
        $insert->bindParam(":password", $password);
        $insert->bindParam(":nivel", $nivel);
        $executeInsert = $insert->execute();

        if($executeInsert){
            header('location:?page=home&parameter=Dados Cadastrados com sucesso! ');
        }
        
        //header('location:../index.php?message=Dados Cadastrados com Sucesso');
        //header('location:../View/page-signup.php?message=Dados Cadastrados com Sucesso. ');
        } catch (PDOException $error) {
            echo 'Erro com banco de dados '.$error ->getMessage();
            exit();
        } catch(Exception $error) {
            echo 'Erro generico '.$error ->getMessage();
            exit();
        }
    }
}


