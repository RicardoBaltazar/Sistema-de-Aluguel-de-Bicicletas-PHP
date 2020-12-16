<?php
require_once 'Config.php';

Class RentConnect {
    
    public function RentDatabase($id, $username, $status){
        try{
        $updateStatus = DatabaseConnect::connect()->prepare('UPDATE product SET status = :status, client = :client WHERE id = :id');
        $updateStatus->bindParam(":id", $id);
        $updateStatus->bindParam(":client", $username);
        $updateStatus->bindParam(":status", $status);
        $executeUpdate = $updateStatus->execute();

            if($executeUpdate){
                header('location:?page=client&parameter=Produto alugado com sucesso! ');
            } else {
                echo 'erro no update das informações';
            }
        //echo $id;
        //echo $status;
        //echo $username;
        } catch (PDOException $error) {
            echo 'Erro com banco de dados '.$error ->getMessage();
            exit();
        } catch(Exception $error) {
            echo 'Erro generico '.$error ->getMessage();
            exit();
        }
    }

    public function DisponibilizeDatabase($username, $status){
        try{
        $updateStatus = DatabaseConnect::connect()->prepare('UPDATE product SET status = :status  WHERE username = :username');
        $updateStatus->bindParam(":status", $status);
        $updateStatus->bindParam(":username", $username);
        $executeUpdate = $updateStatus->execute();

            if($executeUpdate){
                header('location:?page=painel&parameter=Produto disponibilizado com sucesso!');
            } else {
                echo 'erro no update das informações';
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