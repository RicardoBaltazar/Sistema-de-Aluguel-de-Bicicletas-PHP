<?php

class Session {

    public function sessionStart($name, $email, $password, $nivel) {
        session_start();
        $_SESSION['name'] = $name;
        $_SESSION['email'] = $email;
        $_SESSION['password'] = $password;
        $_SESSION['nivel'] = $nivel;
    }

    public function validateSession(){
        session_start();
        if ((!isset($_SESSION['name']) == true) and (!isset($_SESSION['email']) == true) 
        and (!isset($_SESSION['password']) == true) and (!isset($_SESSION['nivel']) == true)) {
            unset($_SESSION['name']);
            unset($_SESSION['email']);
            unset($_SESSION['password']);
            unset($_SESSION['nivel']);
        }
    }

    public function sessionDestroy() {
        session_destroy();
    }
}