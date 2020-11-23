<?php

require_once 'signup-connect.php';

if(isset($_POST['action'])){
    if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['nivel'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = MD5($_POST['password']);
        $nivel = $_POST['nivel'];

        //$signupConnect = new DatabaseConnect();
        $signupConnect = new SignupController();
        $signupInsert = $signupConnect->include($name, $email, $password, $nivel);
        //$signupInsert = $signupConnect->insert($name, $email, $password, $nivel);
        
        //echo $nivel;
        //echo $password;
    } else {
        header('location:./view/page-signup.php?message=Não foi possivel se cadastrar. Por favor, tente novamente.');
    }
} else {
    header('location:./view/page-signup.php?message=Não foi possivel se cadastrar. Por favor, tente novamente.');
}