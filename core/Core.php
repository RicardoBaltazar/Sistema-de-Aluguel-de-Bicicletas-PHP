<?php

Class Core{

    public function __construct()
    {
        $this->run();
    }

    public function run()
    {
        if(isset($_GET[''])){
            $url = $_GET[''];
        }

        if(!empty($url)){
            $url = explode('/', $url);
            $controller = $url[0].'Controller';
        } else {
            $controller = 'homeController';
        }

        $file_path = '../controller'.$controller.'.php';
        if(!file_exists($file_path)){
            $controller = 'homeController';
        }

        
    }
}