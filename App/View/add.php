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
                    <li class="mobile-none"><a href="?page=painel">Minhas Bicicletas</a></li>
                    <li class="mobile-none"><a href="#!" style="background-color:#f9f9f9; color:#696969;">Adicionar Bicicleta</a></li>
                    <li><?php echo $name ?></li>
                    <li><a href="?page=Validate&method=logout">Sair</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <main>
        <section>
            <div class="menu-mobile container center-align">
                <li><a href="?page=painel">Minhas Bicicletas</a></li>
                <li><a href="#!" style="background-color:#f9f9f9; color:#696969;">Adicionar Bicicleta</a></li>
            </div>

            <div>
                <form action="?page=Validate&method=AddProduct" method="POST" enctype="multipart/form-data">
                    <h4>Adicione uma bicicleta</h4>
                    <br>
                    <div class="">
                        <div class="input-field col s6">
                            <input placeholder="Nome" name="name" id="first_name" type="text" class="validate" required>
                            <label for="first_name">Nome da bicicleta</label>
                        </div>
                        <div class="input-field col s6">
                            <input placeholder="Endereço" name="address" id="address" type="text" class="validate">
                            <label for="address">Endereço para retirada</label>
                        </div>
                        <div class="input-field col s6">
                            <input placeholder="Valor" name="value" id="value" type="number" class="validate">
                            <label for="value">Valor por Dia alugado</label>
                        </div>
                        <div class="input-field col s6">
                            <input placeholder="Número para contato" name="phone" id="phone" type="number" class="validate">
                            <label for="phone">Número para contato</label>
                        </div>
                    </div>
                    <div class="">
                        <div class="input-field col s6">
                            <input name="file" id="file" type="file" class="validate">

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