<?php

require_once 'App/Model/SelectClient.php';
require_once 'App/Model/Session.php';
$session = new Session;
$session->validateSession();

$name = $_SESSION['name'];
?>

<div class="home-page">
    <header>
        <nav>
            <div class="nav-wrapper">
                <a href="#" class="brand-logo">Aluguel de Bicicletas</a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><?php echo $name ?></li>
                    <li><a href="?page=Validate&method=logout">Sair</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <main>
        <section>
            <!--<h1><?php echo $name ?></h1>-->

            <ul id="slide-out" class="sidenav sidenav-fixed">
                <li><a href="#!" style="background-color:#696969;">Bicicletas Alugadas</a></li>
                <li><a href="?page=list">Lista de Bicicletas para Alugar</a></li>
            </ul>
            <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>

            <div class="container center-align">
                <h4>Bicicletas alugadas</h4>
                <p>Minha lista de bicicletas alugadas</p>
            </div>

        </section>
    </main>
</div>