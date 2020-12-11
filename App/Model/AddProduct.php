<?php

require_once 'Config.php';

//require_once 'App/Model/SelectPainel.php';

Class AddProductConnect {
    
    public function AddProductDatabase($productName, $newFileName, $username, $status){
        try{
        $add = DatabaseConnect::connect()->prepare('INSERT INTO product(name, file, username, status) 
        VALUES(:name, :file, :username, :status)');
        $add->bindParam(":name", $productName);
        $add->bindParam(":file", $newFileName);
        $add->bindParam(":username", $username);
        $add->bindParam(":status", $status);

        $executeAdd = $add->execute();

            if($executeAdd){
                header('location:?page=add&parameter=Dados Cadastrados com sucesso! ');
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