<div class="home-page">
    <header>
        <nav >
            <div class="nav-wrapper">
                <a href="#" class="brand-logo">Aluguel de Bicicletas</a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><a href="?page=login">Login</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <main>
        <section>
            <div class="container center-align">
                <h4>Cadastrar</h4>
                <form action='?page=ValidateForm' method='post' class="col s6">
                    <div class="">
                        <div class="input-field col s6">
                            <input placeholder="Placeholder" name="name" id="first_name" type="text" class="validate" required>
                            <label for="first_name">Nome</label>
                        </div>
                    </div>
                    <div class="">
                        <div class="input-field col s6">
                            <input name="email" id="email" type="email" class="validate" required>
                            <label for="email">Email</label>
                        </div>
                    </div>
                    <div class="">
                        <div class="input-field col s6">
                            <input name="password" id="password" type="password" class="validate" required>
                            <label for="password">Password</label>
                        </div>
                    </div>
                    <select class="browser-default" name='nivel' required>
                        <option value="" disabled selected>Se Cadastrar como:</option>
                        <option value="1">Cliente</option>
                        <option value="2">Fornecedor</option>
                    </select>
                    <div class="center-align col s12">
                        <button class="btn waves-effect waves-light" type="submit" name="action">Cadastrar</button>
                        <?php
                        
                        //print_r($selectData->select()[0]['name']);
                        print_r($selectData->select()[0]['name']);

                        
                        ?>
                        
                    </div>
                </form>
                <br>
                <p class='erro-signup'>
                    <?php
                    if (isset($_GET['parameter'])) {
                        echo $_GET['parameter'] . "<a href='?page=login'> Faça o Login!</a>";
                    }
                    ?>
                </p>
            </div>
        </section>
    </main>
</div>