<?php

//namespace App\Controller;



//require_once './Model/Class_Select.php';
require_once './App/Model/Config.php';


Class HomeController
{
    public function index(){
        
        require_once './App/View/home.php';
        /*
        try{
            //$selectData = new DatabaseConnect;
            //print_r($selectData->select());
            

        } catch(Exception $error){
            echo $error->getMessage();
        }
        */
    }
}
?>