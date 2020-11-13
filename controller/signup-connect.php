<?php

require_once './model/Class_db_connect.php';


if(isset($_POST['action'])){
    if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['nivel'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = MD5($_POST['password']);
        $nivel = $_POST['nivel'];

        //$signupConnect = new DatabaseConnect();
        //$signupInsert = $signupConnect->insert($name, $email, $password, $nivel);
        
        echo $nivel;
        echo $password;
    } else {
        header('location:page-signup.php?erro=Não foi possivel se cadastrar. Por favor, tente novamente.');
    }
} else {
    header('location:page-signup.php?erro=Não foi possivel se cadastrar. Por favor, tente novamente.');
}

?>