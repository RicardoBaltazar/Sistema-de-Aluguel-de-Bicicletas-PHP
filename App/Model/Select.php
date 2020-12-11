<?php
require_once 'Config.php';

//require_once 'Session.php';

class SelectConnect
{

    public function selectDatabase($name, $email, $password, $nivel)
    {
        try {

            $select = DatabaseConnect::connect()->prepare("SELECT * from users WHERE name = 
        :name AND email = :email AND password = :password AND nivel = :nivel");
            $select->bindParam(":name", $name);
            $select->bindParam(":email", $email);
            $select->bindParam(":password", $password);
            $select->bindParam(":nivel", $nivel);
            $select->execute();
            $executeSelect = $select->fetchAll(PDO::FETCH_ASSOC);

            if ($executeSelect) {
                $sessionLogin = new Session;
                $sessionLogin->sessionStart($name, $email, $password, $nivel);
                //$sessionLogin->validateSession($name, $email, $password, $nivel);
                header('location:?page=painel&parameter=session!');
            } else {
                header('location:?page=login&parameter=Login Inválido, tente Novamente!');
            }
        } catch (PDOException $error) {
            echo 'Erro com banco de dados ' . $error->getMessage();
            exit();
        } catch (Exception $error) {
            echo 'Erro generico ' . $error->getMessage();
            exit();
        }
    }
}
