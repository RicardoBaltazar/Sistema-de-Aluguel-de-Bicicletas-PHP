<?php

require_once 'Config.php';

Class AddProductConnect {
    
    public function AddProductDatabase($name, $newFileName){
        try{
        $add = DatabaseConnect::connect()->prepare('INSERT INTO product(name, file) 
        VALUES(:name, :file)');
        $add->bindParam(":name", $name);
        $add->bindParam(":file", $newFileName);

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