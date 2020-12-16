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

                    //$GLOBALS['id'];
                    $id = $value['id'];
                    //$username = $value['username'];
                    echo "<div class='container center-align '>";                    
                    echo "<form action='?page=Validate&method=Rent' method='POST' class='products'>";
                    echo "<p><label class='label'>Nome: </label>".$value['name'] ."</p>";
                    echo "<img src='./assets/".$value['file']."'></img>";                    
                    echo "<p><label class='label'>Endereço para retirada: </label>".$value['address']."</p>";
                    echo "<p><label class='label'>Valor por dia: </label>".$value['value']."$</p>";
                    echo "<p><label class='label'>Dono da Bicicleta: </label>".$value['username'] ."</p>";
                    echo "<p><label class='label'>Contato: </label>".$value['phone']."</p>";

                    echo "<input type='hidden'  name='id' value='".$id."'>";
                    //echo "<input type='hidden'  name='username' value='".$username."'>";
                    if($value['status'] == 1){
                        echo "<p style='background-color:green; margin:10px;'>status: Disponível</p>";
                        echo "<button class='btn waves-effect waves-light' type='submit' name='action' >Alugar</button>";
                    } else {
                        echo "<p style='background-color:yellow; margin:10px;'>status: Alugado</p>";
                        //echo "<button class='btn waves-effect waves-light' name='provide'>Disponibilizar</button>";
                    }
                    echo "</form>";
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