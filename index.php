<?php
require_once 'Core/Core.php';
require_once 'Controller/HomeController.php';
require_once 'Controller/LoginController.php';
require_once 'Controller/ErroController.php';
require_once 'Controller/validatorForm.php';


$template = file_get_contents("./Template/template.php");

//armazenar o retorno da url e controller dentro de uma variavel
ob_start();
    $core = new Core;
    $core->start($_GET);
    
    $LayoutController = ob_get_contents();
ob_end_clean();

//subistituindo o valor dinâmico do template pela variavel com a página da url
$page =  str_replace('{{template}}', $LayoutController, $template);

echo $page;

