<?php

require_once 'Config.php';

//require_once 'App/Model/SelectPainel.php';

Class AddProductConnect {
    
    public function AddProductDatabase($productName, $newFileName, $username, $address, $phone, $value, $status){
        try{
        $add = DatabaseConnect::connect()->prepare('INSERT INTO product(name, file, username, address, phone, value, status) 
        VALUES(:name, :file, :username, :address, :phone, :value, :status)');
        $add->bindParam(":name", $productName);
        $add->bindParam(":file", $newFileName);
        $add->bindParam(":username", $username);
        $add->bindParam(":address", $address);
        $add->bindParam(":phone", $phone);
        $add->bindParam(":value", $value);
        $add->bindParam(":status", $status);

        $executeAdd = $add->execute();

        

            if($executeAdd){
                header('location:?page=add&parameter=Dados Cadastrados com sucesso! ');
            } else {
                echo 'erro ao inserir dados no banco de dados';
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