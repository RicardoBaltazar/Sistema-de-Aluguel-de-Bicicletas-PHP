<?php

Class Core
{
    public function start($urlGet){
        $controller = ucfirst($urlGet['page'].'Controller');
        $action = 'index';

        //verificar se existe página ou classe controller
        if(!class_exists($controller)){
            $controller = 'ErroController';
        }

        //chamando a classe e o methodo do Controller
        call_user_func_array(array(new $controller, $action), array());

    }

}