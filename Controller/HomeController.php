<?php

require_once './Model/Class_Select.php';

Class HomeController
{
    public function index(){
        echo 'home';

        try{
            $selectData = new SelectConnect;
            print_r($selectData->select());
        } catch(Exception $error){
            echo $error->getMessage();
        }
    }
}