<?php

require_once 'App/Model/SelectPainel.php';



Class PainelController
{

    public $products;



    

    public function index(){

        
        $products = new SelectPainelConnect;
        $products->selectPainelDatabase();
        
        require_once './App/View/painel.php';
        
    }

}
?>