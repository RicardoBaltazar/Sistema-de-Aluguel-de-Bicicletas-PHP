<?php

require_once './Model/Class_Select.php';


Class HomeController
{
    public function index(){
        
        try{
            $selectData = new SelectConnect;
            //print_r($selectData->select());
            
            require_once './View/home.php';

        } catch(Exception $error){
            echo $error->getMessage();
        }
    }
}