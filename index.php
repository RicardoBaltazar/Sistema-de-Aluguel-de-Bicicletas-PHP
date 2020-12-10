<?php
//require_once ("vendor/autoload.php");
//use App\Core\Core;

require_once 'App/Core/Core.php';
require_once 'App/Controller/HomeController.php';
require_once 'App/Controller/LoginController.php';
require_once 'App/Controller/PainelController.php';
require_once 'App/Controller/AddController.php';
require_once 'App/Controller/ErroController.php';
require_once 'App/Controller/ValidateController.php';


$template = file_get_contents("App/Template/template.php");

//armazenar o retorno da url e controller dentro de uma variavel
ob_start();
    $core = new Core;
    $core->start($_GET);
    
    $LayoutController = ob_get_contents();
ob_end_clean();

//subistituindo o valor dinâmico do template pela variavel com a página da url
$page =  str_replace('{{template}}', $LayoutController, $template);

echo $page;

