<?php

require_once 'App/Controller/PainelController.php';
//require_once 'App/Model/SelectPainel.php';
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
                <li><a href="#!" style="background-color:#696969;">Painel de Controle</a></li>
                <li><a href="?page=add">Adicionar Produto</a></li>
            </ul>
            <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            
            <div class="center-align">
                <p>
            <?php

            print_r($products);
            ?>

                </p>
                <p>Nome</p>
                <img src="assets/5fd27b5ec847c.jpg" alt="">
                <p>situação</p>
                <p>alugado por</p>
                <button>Disponibilizar</button>
            </div>
        </section>


    </main>
</div>