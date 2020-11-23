<?php

spl_autoload_register(function($file_name)
{

    if(file_exists('controller/'.$file_name.'.php')){

        require 'controller/'.$file_name.'.php';

    } elseif (file_exists('core'.$file_name.'.php')){

        require 'core'.$file_name.'.php';

    }elseif(file_exists('model'.$file_name.'.php')){

        require 'model'.$file_name.'.php';
    }
});

?>


