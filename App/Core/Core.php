<?php

namespace App\Core;

Class Core
{
    public function start($urlGet){
        //caso não exista o parametro page na url
        if(!isset($urlGet['page'])){
            $controller = 'HomeController';
        } else {
            $controller = ucfirst($urlGet['page'].'Controller');
        }
        
        if(!isset($urlGet['method'])){
            $action = 'index';
        } else {
            $action = $urlGet['method'];
        }

        //$action = 'index';
        $parameter = array();

        //verificar se existe página ou classe controller
        if(!class_exists($controller)){
            $controller = 'ErroController';
            $action = 'index';
        }



        //chamando a classe e o methodo do Controller
        call_user_func_array(array(new $controller, $action), $parameter);

    }

}