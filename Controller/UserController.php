<?php

require_once 'Model/Class_Inserir.php';

Class Users{

    private $name;
    private $email;
    private $password;
    private $nivel;
    private $insertSignup;

    public function signup($name, $email, $password, $nivel){

        var_dump($name, $email, $password, $nivel);

        
        $this->insertSignup = new InsertConnect;

        try{
        //$this->$insertSignup->insertDatabase($this->getName(),$this->getEmail(),$this->getPassword(),$this->getNivel());
        $this->insertSignup->insertDatabase($name, $email, $password, $nivel);
        }catch(Exception $error){
            echo $error->getMessage();
        }
        
    }

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
}