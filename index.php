<?php
require_once 'Core/Core.php';
require_once 'Controller/HomeController.php';

$pageHome = file_get_contents("./Template/template.php");

$core = new Core;
$core->start($_GET);

echo $pageHome;

