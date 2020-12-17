<?php
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
                    <li class="mobile-none"><a href="#!" style='background-color:#f9f9f9; color:#696969;'>Minhas Bicicletas</a></li>
                    <li class="mobile-none"><a href="?page=add">Adicionar Bicicleta</a></li>
                    <li><?php echo $name ?></li>
                    <li><a href="?page=Validate&method=logout">Sair</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <main>
        <section>
            <div class="menu-mobile container center-align">
                <li><a href="#!" style='background-color:#f9f9f9; color:#696969;'>Minhas Bicicletas</a></li>
                <li><a href="?page=add">Adicionar Bicicleta</a></li>
            </div>
            <div class="container center-align">
                <h4>Minhas Bicicletas</h4>
                <p>Lista de Bicicletas cadastradas</p>
                <?php
                $products = new SelectPainelConnect;
                $products->selectPainelDatabase();
                ?>
            </div>
        </section>
    </main>
</div>