
<?php
/*
require_once 'Config.php';
require_once 'App/Model/Session.php';
session_start();

Class SelectClientConnect {
    public $name;
    public $executeSelectPainel;

    public function selectClientDatabase(){
        try{
        $this->name = $_SESSION['name'];
        $selectPainel = DatabaseConnect::connect()->prepare("SELECT * FROM product WHERE product.username = :name");
        $selectPainel->bindParam(":name", $this->name);
        $selectPainel->execute();
        $executeSelectPainel = $selectPainel->fetchAll(PDO::FETCH_ASSOC);
            if($executeSelectPainel){
                foreach($executeSelectPainel as $value){
                    echo "<div class='container center-align products'>";
                    echo "<p>Nome: ".$value['name'] ."</p>";
                    echo "<img src='./assets/".$value['file']."'></img>";
                    echo "<p>Endereço: ".$value['address']."</p>";
                    echo "<p>Contato: ".$value['phone']."</p>";
                    echo "<p>Valor por dia: ".$value['value']."$</p>";
                    if($value['status'] == 1){
                        echo "<p style='background-color:green; margin:10px;'>status: Disponível</p>";
                        echo "<button class='btn waves-effect waves-light' name='edit'>Editar Informações do Produto</button>";                        
                    } else {
                        echo "<p style='background-color:yellow; margin:10px;'>status: Alugado</p>";
                        echo "<button class='btn waves-effect waves-light' name='edit'>Editar Informações do Produto</button>";
                        echo "<a href='?page=Validate&method=Disponibilize' style='color:white;'>
                        <button class='btn waves-effect waves-light'>Disponibilizar</button></a>";
                    }
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
*/