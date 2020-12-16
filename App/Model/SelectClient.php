
<?php

require_once 'Config.php';
require_once 'App/Model/Session.php';
//session_start();

Class SelectClientConnect {
    public $name;
    public $executeSelectPainel;

    public function selectClientDatabase(){
        try{
        $this->name = $_SESSION['name'];
        $selectPainel = DatabaseConnect::connect()->prepare("SELECT * FROM product WHERE product.client = :name");
        $selectPainel->bindParam(":name", $this->name);
        $selectPainel->execute();
        $executeSelectPainel = $selectPainel->fetchAll(PDO::FETCH_ASSOC);
            if($executeSelectPainel){
                foreach($executeSelectPainel as $value){
                    if($value['status'] == 2){
                    echo "<div class='container center-align products'>";
                    echo "<p><label class='label'>Nome: </label>".$value['name'] ."</p>";
                    echo "<img src='./assets/".$value['file']."'></img>";
                    echo "<p><label class='label'>Endereço para retirada: </label>".$value['address']."</p>";
                    echo "<p><label class='label'>Valor por dia: </label>".$value['value']."$</p>";
                    echo "<p><label class='label'>Dono da Bicicleta: </label>".$value['username'] ."</p>";
                    echo "<p><label class='label'>Contato: </label>".$value['phone']."</p>";
                    echo "<p style='background-color:yellow; margin:10px;'>status: Alugado</p>";
                    //echo "<a href='?page=Validate&method=Disponibilize' style='color:white;'>
                    //    <button class='btn waves-effect waves-light'>Devolver Bicicleta</button></a>";        
                    echo "</div>";
                }
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
