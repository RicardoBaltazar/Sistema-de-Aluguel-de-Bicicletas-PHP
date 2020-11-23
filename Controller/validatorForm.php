<?php

require_once 'SignupController.php';

if(isset($_POST['action'])){
    if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['nivel'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = MD5($_POST['password']);
        $nivel = $_POST['nivel'];

        $name = strtolower($name);
        $email = strtolower($email);

        $signupControllerValidation = new SignupController();
        $signupControllerValidation->insert($name, $email, $password, $nivel);

    } else {
        header('location:./View/page-signup.php?message=Não foi possivel se cadastrar. Por favor, tente novamente.');
    }
} else {
    header('location:./View/page-signup.php?message=Não foi possivel se cadastrar. Por favor, tente novamente.');
}