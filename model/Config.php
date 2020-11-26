<?php

Class DatabaseConnect {

    private static $pdo;

    public static function connect()
    {
        if(self::$pdo==null){
            try {
                self::$pdo = new PDO('mysql:host=localhost;dbname=bicycle_rental_system;charset=utf8', 'root', '');
            } catch (PDOException $error) {
                echo "Erro com banco de dados: ".$error->getMessage();
                exit();
            } catch (Exception $error){
                echo "Erro Genérico: ".$error->getMessage();
                exit();
            }
        }
        return self::$pdo;
    }



}

    /*
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
    */


