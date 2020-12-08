<?php


require_once 'App/Controller/UserController.php';

Class ValidateController{

    public function signup(){
        if(isset($_POST['action'])){
            if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['nivel'])){
                $name = $_POST['name'];
                $email = $_POST['email'];
                $password = MD5($_POST['password']);
                $nivel = $_POST['nivel'];
        
                $name = strtolower($name);
                $email = strtolower($email);
        
                //echo 'signup';


                $signup = new Users;
                $signup->signupUser($name, $email, $password, $nivel);
        
            } else {
                //header('location:./View/page-signup.php?message=Não foi possivel se cadastrar. Por favor, tente novamente.');
                header('location:?page=home&parameter=Não foi possivel se cadastrar. Por favor, tente novamente.');
            }
        } else {
            //header('location:./View/page-signup.php?message=Não foi possivel se cadastrar. Por favor, tente novamente.');
            header('location:?page=home&parameter=Não foi possivel se cadastrar. Por favor, tente novamente.');
        }
    }

    
    public function login(){
        if(isset($_POST['action'])){
            if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['nivel'])){
                $name = $_POST['name'];
                $email = $_POST['email'];
                $password = MD5($_POST['password']);
                $nivel = $_POST['nivel'];
        
                $name = strtolower($name);
                $email = strtolower($email);
        
                $signup = new Users;
                $signup->LoginUser($name, $email, $password, $nivel);
                
        
            } else {
                header('location:./View/page-login.php?message=Não foi possivel realizar login. Por favor, tente novamente.');
            }
        } else {
            header('location:./View/page-login.php?message=Não foi possivel realizar login. Por favor, tente novamente.');
        }
    }
    
    public function logout(){
        $logout = new Users;
        $logout->LogoutUser();
    }
}
