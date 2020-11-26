<?php

require_once 'Model/Class_Inserir.php';
//require_once 'Model/Config.php';

Class Users{

    private $insertSignup;

    public function signupUser($name, $email, $password, $nivel){
        $this->insertSignup = new InsertConnect;
        //$this->insertSignup = new DatabaseConnect;
        $result = $this->insertSignup->insertDatabase($name, $email, $password, $nivel);
    }

    //s
    public function setName($value){
        $this->name = $value;
    }
    
    public function setEmail($value){
        $this->email = $value;
    }
    
    public function setPassword($value){
        $this->password = $value;
    }
    
    public function setNivel($value){
        $this->nivel = $value;
    } 
    
    //get
    public function getName(){
        return $this->name;
    }
    
    public function getEmail(){
        return $this->email;
    }
    
    public function getPassword(){
        return $this->password;
    }
    
    public function getNivel(){
        return $this->nivel;
    }
}