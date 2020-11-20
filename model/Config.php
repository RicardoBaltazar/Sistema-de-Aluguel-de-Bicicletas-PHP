<?php

Class DatabaseConnect {

    public $pdo;

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

}