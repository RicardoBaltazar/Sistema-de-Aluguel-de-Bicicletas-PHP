<?php

require_once 'Class_db_connect.php';

Class SetGet_Insert extends UsersConnect{
    private $name;
    private $email;
    private $password;
    private $nivel;

    //set
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

    public function getInsert(){
        return $this->insertDatabase($this->getName(),$this->getEmail(),$this->getPassword(),$this->getNivel());
    }
}