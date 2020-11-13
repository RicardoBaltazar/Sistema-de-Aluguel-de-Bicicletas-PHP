<?php

Class DatabaseConnect {

    private $pdo;

    public function __construct()
    {
        try {
            $this->pdo = new PDO('mysql:host=localhost;dbname=bicycle_rental_system;charset=utf8', 'root', '');
        } catch (PDOException $error) {
            echo "Erro com banco de dados: ".$error->getMessage();
            exit();
        } catch (Exception $error){
            echo "Erro Genérico: ".$error->getMessage();
            exit();
        }
    }

    public function insert($name, $email, $password, $nivel){
        try{
        $insert = $this->pdo->prepare('INSERT INTO users(name, email, password, nivel) 
        VALUES(:name, :email, :password, :nivel)');
        $insert->bindParam(":name", $name);
        $insert->bindParam(":email", $email);
        $insert->bindParam(":password", $password);
        $insert->bindParam(":nivel", $nivel);
        $insert->execute();
        header('location:index.php');
        } catch (PDOException $error) {
            echo 'Erro com banco de dados '.$error ->getMessage();
        } catch(Exception $error) {
            echo 'Erro generico '.$error ->getMessage();
        }
    }
}

?>