<?php

require_once 'App/Model/SelectList.php';
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
                    <li><a href="?page=client">Bicicletas Alugadas</a></li>
                    <li><a href="#!" style="background-color:#f9f9f9; color:#696969;">Lista de Produtos para Alugar</a></li>
                    <li><?php echo $name ?></li>
                    <li><a href="?page=Validate&method=logout">Sair</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <main>
        <section>
            <!--<h1><?php echo $name ?></h1>-->

            <!--
            <ul id="slide-out" class="sidenav sidenav-fixed">
                <li><a href="?page=client">Bicicletas Alugadas</a></li>
                <li><a href="#!" style="background-color:#696969;">Lista de Produtos para Alugar</a></li>
            </ul>
            <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            -->

            <div class="container center-align">
                <h4>Lista de Bicicletas</h4>
                <p>Lista de bicicletas para alugar</p>

                <?php
                    $list = new SelectClientConnect;
                    $list->selectClientDatabase();
                ?>

            </div>

        </section>
    </main>
</div>