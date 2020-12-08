<?php

require_once 'App/Model/Session.php';
$session = new Session;
$session->validateSession();

$name = $_SESSION['name'];
?>

<div class="home-page">
    <header>
        <nav >
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
            <h1><?php echo $name?></h1>
        </section>
    </main>
</div>