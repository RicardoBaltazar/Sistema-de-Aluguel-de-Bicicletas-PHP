<?php

if(isset($_POST['action'])){
    if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['nivel'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = MD5($_POST['password']);
        $nivel = $_POST['nivel'];

        $name = strtolower($name);
        $email = strtolower($email);

    } else {
        header('location:./View/page-login.php?message=Não foi possivel realizar login. Por favor, tente novamente.');
    }
} else {
    header('location:./View/page-login.php?message=Não foi possivel realizar login. Por favor, tente novamente.');
}