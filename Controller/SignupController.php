<?php
/*
require_once './Model/Class_SetGet_Insert.php';

Class SignupController{
    Private $insertData;
    
    public function __construct(){
        $this->insertData = new SetGet_Insert();
    }

    public function insert($name, $email, $password, $nivel){
        $this->insertData->setName($name);
        $this->insertData->setEmail($email);
        $this->insertData->setPassword($password);
        $this->insertData->setNivel($nivel);

        try{
            $result = $this->insertData->getInsert();

        }catch(Exception $error){
            echo $error->getMessage();
        }

        /*
        if(!$result >= 1){
            //header('location:../View/page-signup.php?message=Não foi possivel se cadastrar. Por favor, tente novamente.');
            header('location:?page=home?message=Não foi possivel se cadastrar. Por favor, tente novamente.');
        }
        
    }
}

?>