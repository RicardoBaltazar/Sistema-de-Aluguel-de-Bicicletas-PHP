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
        $selectPainel = DatabaseConnect::connect()->prepare("SELECT * FROM product WHERE product.username = :name");
        $selectPainel->bindParam(":name", $this->name);
        $selectPainel->execute();
        $executeSelectPainel = $selectPainel->fetchAll(PDO::FETCH_ASSOC);
            if($executeSelectPainel){
                foreach($executeSelectPainel as $value){
                    $id = $value['id'];
                    echo "<div class='container center-align '>";                    
                    echo "<form action='?page=Validate&method=Disponibilize' method='POST' class='products'>";
                    echo "<p><label class='label'>Nome: </label>".$value['name'] ."</p>";
                    echo "<img src='./assets/".$value['file']."'></img>";                    
                    echo "<p><label class='label'>Endereço para retirada: </label>".$value['address']."</p>";
                    echo "<p><label class='label'>Valor por dia: </label>".$value['value']."$</p>";
                    echo "<p><label class='label'>Dono da Bicicleta: </label>".$value['username'] ."</p>";
                    echo "<p><label class='label'>Contato: </label>".$value['phone']."</p>";

                    echo "<input type='hidden'  name='id' value='".$id."'>";
                    //echo "<input type='hidden'  name='username' value='".$username."'>";
                    if($value['status'] == 2){
                        echo "<p style='background-color:yellow; margin:10px;'>status: Alugado</p>";
                        echo "<button class='btn waves-effect waves-light' type='submit' name='action' >Disponibilizar</button>";
                    } else {
                        echo "<p style='background-color:green; margin:10px;'>status: Disponível</p>";
                        //echo "<button class='btn waves-effect waves-light' name='provide'>Disponibilizar</button>";
                    }
                    echo "</form>";
                    //echo "<p> ".$value['status'] ."</p>";
                    echo "</div>";
                }
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