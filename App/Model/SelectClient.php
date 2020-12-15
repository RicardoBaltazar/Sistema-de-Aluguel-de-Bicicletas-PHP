<?php

require_once 'Config.php';
require_once 'App/Model/Session.php';


Class SelectClientConnect {


    public $name;
    public $executeSelectPainel;

    public function selectClientDatabase(){
        try{
        //$this->name = $_SESSION['name'];
        //$selectPainel = DatabaseConnect::connect()->prepare("SELECT * FROM product");
        $selectPainel = DatabaseConnect::connect()->prepare("SELECT * FROM product");
        //$selectPainel = DatabaseConnect::connect()->prepare("SELECT * from products WHERE products.username = 
        //:name");
        //$selectPainel->bindParam(":name", $this->name);
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
                    echo "<p>Endereço para retirada".$value['address']."</p>";
                    echo "<p>Valor por dia: ".$value['value']."$</p>";
                    
                    echo "<p>Dono do produto: ".$value['username'] ."</p>";
                    echo "<p>Contato: ".$value['phone']."</p>";
                    if($value['status'] = 1){
                        echo "<p style='background-color:green; margin:3px;'>status: Disponível</p>";
                        echo "<a href='?page=Validate&method=Rent' style='color:white;'>
                        <button class='btn waves-effect waves-light'>Alugar</button></a>";

                    } else {
                        echo "<p style='background-color:yellow; margin:3px;>status: Alugado</p>";
                        //echo "<button class='btn waves-effect waves-light' name='provide'>Disponibilizar</button>";

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