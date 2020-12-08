<?php

require_once 'App/Model/Insert.php';
require_once "App/Model/Select.php";
//require_once 'Model/Config.php';

class Users
{

    private $insertSignup;
    private $selectLogin;

    public function signupUser($name, $email, $password, $nivel)
    {
        $this->insertSignup = new InsertConnect;
        //$this->insertSignup = new DatabaseConnect;
        $this->insertSignup->insertDatabase($name, $email, $password, $nivel);
    }

    public function loginUser($name, $email, $password, $nivel)
    {
        $this->selectLogin = new SelectConnect;
        $this->selectLogin->selectDatabase($name, $email, $password, $nivel);

        //talvez fazer a session aqui
    }


}
