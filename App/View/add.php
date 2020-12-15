<?php

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
                <li><a href="?page=painel">Meus Produtos</a></li>
                <li><a href="#!" style="background-color:#696969;">Adicionar Produto</a></li>
            </ul>
            <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>

            <div style="margin-left: 30%;">
                <form action="?page=Validate&method=AddProduct" method="POST" enctype="multipart/form-data">
                    <h4>Adicione um produto</h4>
                    <br>
                    <div class="">
                        <div class="input-field col s6">
                            <input placeholder="Placeholder" name="name" id="first_name" type="text" class="validate" required>
                            <label for="first_name">Nome do produto</label>
                        </div>
                    </div>
                    <div class="">
                        <div class="input-field col s6">
                            <input name="file" id="file" type="file" class="validate" >

                        </div>
                        <div class="center-align col s12">
                            <button class="btn waves-effect waves-light" type="submit" name="action">Adicionar produto</button>
                        </div>
                    </div>

                </form>
            </div>
        </section>
    </main>
</div>