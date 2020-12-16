<?php
//require_once 'App/Controller/PainelController.php';
require_once 'App/Model/SelectPainel.php';
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
            <ul id="slide-out" class="sidenav sidenav-fixed">
                <li><a href="#!" style="background-color:#696969;">Minhas Bicicletas</a></li>
                <li><a href="?page=add">Adicionar Bicicleta</a></li>
            </ul>
            <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            
            
            <div class="container center-align">
            <h4>Minhas Bicicletas</h4>
            <p>Lista de Bicicletas cadastradas</p>
            <?php


            //print_r($products);
            //$allProducts = array();

            $products = new SelectPainelConnect;
            $products->selectPainelDatabase();

                        


            ?>

            </div>

            
        </section>


    </main>
</div>