<?php

require_once 'Config.php';
require_once 'App/Model/Session.php';
session_start();

Class SelectPainelConnect {


    public $name;

    public function selectPainelDatabase(){
        try{
        $this->name = $_SESSION['name'];
        //$selectPainel = DatabaseConnect::connect()->prepare("SELECT * FROM product");
        $selectPainel = DatabaseConnect::connect()->prepare("SELECT * FROM product WHERE product.username = :name");
        //$selectPainel = DatabaseConnect::connect()->prepare("SELECT * from products WHERE products.username = 
        //:name");
        $selectPainel->bindParam(":name", $this->name);
        //$selectPainel->bindParam(":email", $email);
        //$selectPainel->bindParam(":password", $password);
        //$selectPainel->bindParam(":nivel", $nivel); 
        $selectPainel->execute();
        $executeSelectPainel = $selectPainel->fetchAll(PDO::FETCH_ASSOC);

            if($executeSelectPainel){
                print_r($executeSelectPainel);
                
                echo $_SESSION['name'] ;
                //$sessionLogin->validateSession($name, $email, $password, $nivel);
                //header('location:?page=painel&parameter=Ola Mundo');
                //echo 'Ok';
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