<?php

require_once './class/Class_db_connect.php';


if(isset($_POST['action'])){
    if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['nivel'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $nivel = $_POST['nivel'];

        echo $nivel;
    } else {
        header('location:page-signup.php?erro=Não foi possivel se cadastrar. Por favor, tente novamente.');
    }
} else {
    header('location:page-signup.php?erro=Não foi possivel se cadastrar. Por favor, tente novamente.');
}

?>