<?php

require_once '../model/Class_SetGet_Insert.php';

//Class SignupController extends SetGet_Insert{
Class SignupController{

    Private $insertData;

    public function __construct(){
        $this->insertData = new SetGet_Insert();
        $this->include($name, $email, $password, $nivel);
    }

    public function include($name, $email, $password, $nivel){
        $this->insertData->setName($name);
        $this->insertData->setEmail($email);
        $this->insertData->setPassword($password);
        $this->insertData->setNivel($nivel);
        $result = $this->insertData->getInsert();
    }
}

/*
require_once '../model/Class_db_connect.php';

if(isset($_POST['action'])){
    if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['nivel'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = MD5($_POST['password']);
        $nivel = $_POST['nivel'];

        //$signupConnect = new DatabaseConnect();
        $signupConnect = new UsersConnect();
        $signupInsert = $signupConnect->insertDatabase($name, $email, $password, $nivel);
        //$signupInsert = $signupConnect->insert($name, $email, $password, $nivel);
        
        //echo $nivel;
        //echo $password;
    } else {
        header('location:./view/page-signup.php?message=Não foi possivel se cadastrar. Por favor, tente novamente.');
    }
} else {
    header('location:./view/page-signup.php?message=Não foi possivel se cadastrar. Por favor, tente novamente.');
}
*/

?>