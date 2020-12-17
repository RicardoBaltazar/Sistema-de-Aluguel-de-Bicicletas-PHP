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
                    <li class="mobile-none"><a href="?page=client">Bicicletas Alugadas</a></li>
                    <li class="mobile-none"><a href="#!" style="background-color:#f9f9f9; color:#696969;">Lista de Bicicletas para Alugar</a></li>
                    <li><?php echo $name ?></li>
                    <li><a href="?page=Validate&method=logout">Sair</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <main>
        <section>
            <div class="menu-mobile container center-align">
                <li><a href="?page=client">Bicicletas Alugadas</a></li>
                <li><a href="#!" style="background-color:#f9f9f9; color:#696969;">Lista de Bicicletas para Alugar</a></li>
            </div>
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