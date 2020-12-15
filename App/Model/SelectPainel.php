<?php

require_once 'Config.php';
require_once 'App/Model/Session.php';
session_start();

Class SelectPainelConnect {


    public $name;
    public $executeSelectPainel;

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
                //print_r($executeSelectPainel);
                foreach($executeSelectPainel as $value){

                    echo "<div class='container center-align products'>";
                    echo "<p>Nome: ".$value['name'] ."</p>";
                    echo "<img src='./assets/".$value['file']."'></img>";
                    echo "<p>Endereço: ".$value['address']."</p>";
                    echo "<p>Contato: ".$value['phone']."</p>";
                    echo "<p>Valor por dia: ".$value['value']."$</p>";
                    //echo "<p>".$value['username'] ."</p>";
                    //$value['status'] = 2;
                    if($value['status'] == 1){
                        echo "<p style='background-color:green; margin:3px;'>status: Disponível</p>";
                        echo "<button class='btn waves-effect waves-light' name='edit'>Editar Informações do Produto</button>";                        
                    } else {
                        echo "<p style='background-color:yellow; margin:3px;'>status: Alugado</p>";
                        echo "<button class='btn waves-effect waves-light' name='edit'>Editar Informações do Produto</button>";
                        echo "<a href='?page=Validate&method=Disponibilize' style='color:white;'>
                        <button class='btn waves-effect waves-light'>Disponibilizar</button></a>";

                    }
                    //echo "<p> ".$value['status'] ."</p>";
                    echo "</div>";
                }
                
                //echo $_SESSION['name'] ;
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