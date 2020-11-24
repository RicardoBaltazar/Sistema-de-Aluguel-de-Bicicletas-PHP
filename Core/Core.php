<?php

Class Core
{
    public function start($urlGet){
        $controller = ucfirst($urlGet['page'].'Controller');

        //verificar se existe página ou classe controller
        if(!class_exists($controller)){
            $controller = 'ErroController';
        }

        echo $controller;

    }

}