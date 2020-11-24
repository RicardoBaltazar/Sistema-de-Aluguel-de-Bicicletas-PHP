<?php

Class LoginController
{
    public function index(){
        
        try{
            $selectData = new SelectConnect;
            require_once './View/login.php';

        } catch(Exception $error){
            echo $error->getMessage();
        }
    }
}